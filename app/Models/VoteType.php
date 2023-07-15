<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteType extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start_date', 'end_date'];

    public function voters()
    {
        return $this->hasMany(Voter::class);
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function votes()
    {
        return $this->hasManyThrough(Vote::class, Voter::class);
    }

    public function results()
    {
        return $this->hasMany(VoteResult::class);
    }
    // Add relationships or any other configurations
}
