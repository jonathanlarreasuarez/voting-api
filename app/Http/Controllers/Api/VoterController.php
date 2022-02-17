<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IVoterController;
use App\Http\Controllers\Controller;
use App\Models\Voter;
use App\Repositories\VoterRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoterController extends Controller implements  IVoterController
{
    private $voterRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        VoterRepository $voterRepository
    ){
        $this->voterRepository = $voterRepository;
    }

    public function index(Request $request)  : JsonResponse
    {
        $vote = $this->voterRepository->all($request);
        return response()->json($vote, 200);
    }

    public function store(Voter $request)  : JsonResponse
    {
        $voter = new Voter($request->all());
        $voter = $this->voterRepository->save($voter);
        return response()->json($voter, 201);
    }

    public function show($id)  : JsonResponse
    {
        $voter = $this->voterRepository->find($id);
        return response()->json($voter, 200);
    }

    public function update(Request $request, Voter $voter)  : JsonResponse
    {
        $voter->fill($request->all());
        if ($voter->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->voterRepository->save($voter), 200);
    }

    public function destroy(Voter $voter)  : JsonResponse
    {
        $this->voterRepository->destroy($voter);
        return response()->json(null, 204);
    }
}
