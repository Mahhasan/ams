<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $table = 'votes';

    protected $fillable = ['vote_type_id', 'candidate_id', 'voter_id'];
    public function voteType()
    {
        return $this->belongsTo(VoteType::class);
    }

    public function voter()
    {
        return $this->belongsTo(Voter::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
