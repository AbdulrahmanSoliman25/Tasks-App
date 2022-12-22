<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Resources\NameResource;
use App\Repositories\Intefaces\IUserRepository;

class UserController extends Controller
{
    public function __construct(private IUserRepository $userRepository)
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
            $Users = NameResource::collection($this->userRepository->names());
            return $Users->additional(JsonResponse::success());
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}
