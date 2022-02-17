<?php


namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Occurrence;


/**
 * CampusRepository
 */
class OccurrenceRepository extends BaseRepository
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
    public function __construct(Occurrence $occurrence)
    {
        parent::__construct($occurrence);
    }

}
