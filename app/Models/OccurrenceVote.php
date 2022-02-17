<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OccurrenceVote extends Model
{
    use HasFactory;

    /**
     * table
     *
     * @var string
     */
    protected $table = 'occurrence_votes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'occurrence_id',
        'vote_id'
    ];

    /**
     * The attributes are hidden
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
