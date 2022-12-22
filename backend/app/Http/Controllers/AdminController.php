<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Resources\NameResource;
use App\Repositories\Intefaces\IAdminRepository;

class AdminController extends Controller
{
    public function __construct(private IAdminRepository $adminRepository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Admins = NameResource::collection($this->adminRepository->names());
            return $Admins->additional(JsonResponse::success());
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}
