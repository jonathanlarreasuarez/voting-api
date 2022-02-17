<?php


namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Status;


/**
 * CampusRepository
 */
class StatusRepository extends BaseRepository
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
    public function __construct(Status $status)
    {
        parent::__construct($status);
    }

}
