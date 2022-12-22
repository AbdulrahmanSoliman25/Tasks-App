<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin;
use App\Repositories\Intefaces\IAdminRepository;

class AdminRepository extends BaseRepository implements IAdminRepository
{
    public function model()
    {
        return Admin::class;
    }

}
