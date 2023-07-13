<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    protected $table = 'voters';

    protected $fillable = ['vote_type_id', 'member_id',];
    public function voteType()
    {
        return $this->belongsTo(VoteType::class);
    }
}
