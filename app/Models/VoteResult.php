<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteResult extends Model
{
    use HasFactory;
    protected $table = 'vote_results';

    protected $fillable = ['vote_type_id', 'candidate_id', 'vote_count'];
    public function voteType()
    {
        return $this->belongsTo(VoteType::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
