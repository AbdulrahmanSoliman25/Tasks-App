<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Intefaces\IUserRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    public function model()
    {
        return User::class;
    }
}
