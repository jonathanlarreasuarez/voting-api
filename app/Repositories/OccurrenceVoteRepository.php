<?php


namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\OccurrenceVote;


/**
 * CampusRepository
 */
class OccurrenceVoteRepository extends BaseRepository
{
    /**
     * relations
     *
     * @var array
     */
    protected $relations = ['status'];


    /**
     * __construct
     *
     * @return void
     */
    public function __construct(OccurrenceVote $occurrenceVote)
    {
        parent::__construct($occurrenceVote);
    }

}
