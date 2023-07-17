<?php

namespace App\Http\Controllers;
use App\Models\VoteType;
use App\Models\Voter;
use App\Models\Candidate;
use App\Models\Member;
use App\Models\VoteResult;
use App\Models\Vote;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
class VoteController extends Controller
{
   
   
    public function showCreateVoteTypeForm()
    {
        return view('votes.vote_types.create');
    }

    public function createVoteType(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Create a new vote type
        $voteType = VoteType::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Vote type created successfully.');
    }

    public function showVoteTypes()
    {
        // Retrieve all vote types
        $voteTypes = VoteType::all();

        return view('votes.vote_types.index', compact('voteTypes'));
    }

    public function showAddVotersForm($voteTypeId = null)
{
    $voteType = null;
    $members = Member::all();
    $submittedVoters = [];

    // Fetch all vote types
    $voteTypes = VoteType::all();

    if ($voteTypeId) {
        $voteType = VoteType::findOrFail($voteTypeId);
        $submittedVoters = $voteType->voters->pluck('id')->toArray();
    }

    return view('votes.voters.create', compact('voteType', 'members', 'submittedVoters', 'voteTypes'));
}

public function createVoters(Request $request)
{
    // Validate the request
    $request->validate([
        'vote_type_id' => 'required',
        'voters' => 'required|array',
    ]);

    // Check if the voting period is active
    $voteType = VoteType::findOrFail($request->vote_type_id);
    $currentDate = now()->toDateString();
    if ($currentDate < $voteType->start_date || $currentDate > $voteType->end_date) {
        return redirect()->back()->with('error', 'Voting period has ended.');
    }

    // Get the selected voters
    $selectedVoters = $request->input('voters', []);

    // Check if the voters have already voted
    $votersAlreadyVoted = Voter::where('vote_type_id', $voteType->id)
        ->whereIn('member_id', $selectedVoters)
        ->exists();
    if ($votersAlreadyVoted) {
        return redirect()->back()->with('error', 'One or more selected voters have already voted in this category.');
    }

    // Save voters for the given vote type
    $voters = [];
    foreach ($selectedVoters as $voterId) {
        $voters[] = new Voter(['vote_type_id' => $voteType->id, 'member_id' => $voterId]);
    }

    Voter::insert($voters);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Voters added successfully.');
}

public function deleteVoters(Request $request)
{
    // Validate the request
    $request->validate([
        'voter_ids' => 'required|array',
    ]);

    // Get the selected voter IDs to delete
    $voterIdsToDelete = $request->input('voter_ids', []);

    // Delete the voters
    Voter::whereIn('id', $voterIdsToDelete)->delete();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Voters deleted successfully.');
}


    public function showAddCandidatesForm($voteTypeId = null)
    {
        $voteType = null;
        $members = Member::all();

        if ($voteTypeId) {
            $voteType = VoteType::findOrFail($voteTypeId);
        }

        return view('votes.candidates.create', compact('voteType', 'members'));
    }

    public function createCandidates(Request $request)
    {
        // Validate the request
        $request->validate([
            'vote_type_id' => 'required',
            'candidates' => 'required|array',
        ]);

        $candidates = [];

        // Save candidates for the given vote type
        foreach ($request->candidates as $candidateId) {
            $candidates[] = new Candidate(['member_id' => $candidateId]);
        }

        // Associate candidates with the vote type
        VoteType::find($request->vote_type_id)->candidates()->saveMany($candidates);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Candidates added successfully.');
    }

    public function showVoteForm()
{
    $voteTypes = VoteType::all();
    $voter = Voter::where('member_id', auth()->user()->member->id)->first();
    $selectedVoteTypeId = $voter ? $voter->vote_type_id : null;

    $candidates = [];
    if ($selectedVoteTypeId) {
        $candidates = Candidate::where('vote_type_id', $selectedVoteTypeId)->get();
    }

    return view('votes.vote.create', compact('voteTypes', 'candidates', 'voter'));
}

    
    

    public function vote(Request $request)
    {
        // Validate the request
        $request->validate([
            'vote_type_id' => 'required',
            'candidate_id' => 'required',
        ]);

        // Get the vote type and voter
        $voteType = VoteType::findOrFail($request->vote_type_id);
        $voter = Voter::where('member_id', auth()->user()->member->id)
            ->where('vote_type_id', $voteType->id)
            ->first();

        // Check if the voter is eligible to vote
        if (!$voter) {
            return redirect()->back()->with('error', 'You are not eligible to vote in this category.');
        }

        // Check if the voting period is active
        $currentDate = now()->toDateString();
        if ($currentDate > $voteType->start_date || $currentDate > $voteType->end_date) {
            return redirect()->back()->with('error', 'Voting period has ended.');
        }

        // Check if the voter has already voted
        if ($voter->votes()->exists()) {
            return redirect()->back()->with('error', 'You have already voted in this category.');
        }

        // Create a new vote
        $vote = new Vote([
            'candidate_id' => $request->candidate_id,
            'vote_type_id' => $voteType->id,
            'voter_id' => $voter->id,
        ]);

        // Save the vote
        $vote->save();

        // Increment the vote count for the candidate in the results table
        $result = VoteResult::where('vote_type_id', $voteType->id)
            ->where('candidate_id', $request->candidate_id)
            ->first();
        if ($result) {
            $result->increment('vote_count');
        } else {
            VoteResult::create([
                'vote_type_id' => $voteType->id,
                'candidate_id' => $request->candidate_id,
                'vote_count' => 1,
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Vote submitted successfully.');
    }


    public function downloadResult($voteTypeId)
    {
        // Get the vote type and results
        $voteType = VoteType::findOrFail($voteTypeId);
        $results = $voteType->results;

        // Generate the PDF
        $pdf = PDF::loadView('results.pdf', compact('voteType', 'results'));

        // Download the PDF
        return $pdf->download('voting_results.pdf');
    }
}