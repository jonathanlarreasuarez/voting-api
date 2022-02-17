<?php

namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\User;


/**
 * CampusRepository
 */
class UserRepository extends BaseRepository
{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

}
