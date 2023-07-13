<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteType extends Model
{
    use HasFactory;
    protected $table = 'vote_types';

    protected $fillable = ['title', 'start_date', 'end_date'];

    public function voters()
    {
        return $this->hasMany(Voter::class);
    }
    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
    public function vote_results()
    {
        return $this->hasMany(VoteResult::class);
    }

    // Add relationships or any other configurations
}
