<?php

namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Candidate;


/**
 * CampusRepository
 */
class CandidateRepository extends BaseRepository
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
    public function __construct(Candidate $candidate)
    {
        parent::__construct($candidate);
    }

}
