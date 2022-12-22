<?php

namespace App\Http\Controllers;

use App\Helpers\JsonResponse;
use App\Http\Resources\StatisticResource;
use App\Repositories\Intefaces\IStatisticRepository;

class StatisticController extends Controller
{
    public function __construct(private IStatisticRepository $statisticRepository)
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
            $Statistics = StatisticResource::collection($this->statisticRepository->topTen());
            return $Statistics->additional(JsonResponse::success());
        } catch (\Exception $e) {
            return JsonResponse::respondError($e->getMessage());
        }
    }
}
