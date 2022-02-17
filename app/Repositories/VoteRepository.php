<?php

namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Vote;


/**
 * CampusRepository
 */
class VoteRepository extends BaseRepository
{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Vote $vote)
    {
        parent::__construct($vote);
    }

}
