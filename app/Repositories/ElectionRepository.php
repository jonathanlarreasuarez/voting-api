<?php

namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Election;


/**
 * CampusRepository
 */
class ElectionRepository extends BaseRepository
{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Election $election)
    {
        parent::__construct($election);
    }

}
