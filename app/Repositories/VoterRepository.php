<?php

namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Voter;


/**
 * CampusRepository
 */
class VoterRepository extends BaseRepository
{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Voter $voter)
    {
        parent::__construct($voter);
    }

}
