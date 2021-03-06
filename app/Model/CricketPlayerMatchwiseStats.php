<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;
class CricketPlayerMatchwiseStats extends Model {
	use SoftDeletes,
	Eloquence;	
    
    protected $table = 'cricket_player_matchwise_stats';
    protected $fillable = [
        'tournament_id',
        'team_id',
        'user_id',
        'match_id'
    ];

}
