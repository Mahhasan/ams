<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    
    protected $table = 'voters';

    protected $fillable = ['vote_type_id', 'member_id'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function hasVoted()
    {
        return $this->votes()->exists();
    }
}
