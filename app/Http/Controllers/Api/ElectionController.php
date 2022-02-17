<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IElectionController;
use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Repositories\ElectionRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ElectionController extends Controller implements  IElectionController
{

    private $electionRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        ElectionRepository $electionRepository
    ) {
        $this->electionRepository = $electionRepository;
    }

    public function index(Request $request) : JsonResponse
    {
        $candidate = $this->electionRepository->all($request);
        return response()->json($candidate, 200);
    }

    public function store(Election $request) : JsonResponse
    {
        $election = new Election($request->all());
        $election = $this->electionRepository->save($election);
        return response()->json($election, 201);
    }

    public function show($id) : JsonResponse
    {
        $election = $this->electionRepository->find($id);
        return response()->json($election, 200);
    }

    public function update(Request $request, Election $election) : JsonResponse
    {
        $election->fill($request->all());
        if ($election->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->electionRepository->save($election), 200);
    }

    public function destroy(Election $election) : JsonResponse
    {
        $this->electionRepository->destroy($election);
        return response()->json(null, 204);
    }
}
