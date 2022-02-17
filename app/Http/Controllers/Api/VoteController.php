<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IVoteController;
use App\Http\Controllers\Controller;
use App\Models\Vote;
use App\Repositories\VoteRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoteController extends Controller implements IVoteController
{

    private $voteRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        VoteRepository $voteRepository
    ){
        $this->voteRepository = $voteRepository;
    }

    public function index(Request $request) : JsonResponse
    {
        $vote = $this->voteRepository->all($request);
        return response()->json($vote, 200);
    }

    public function store(Vote $request) : JsonResponse
    {
        $vote = new Vote($request->all());
        $vote = $this->voteRepository->save($vote);
        return response()->json($vote, 201);
    }

    public function show($id) : JsonResponse
    {
        $vote = $this->voteRepository->find($id);
        return response()->json($vote, 200);
    }

    public function update(Request $request, Vote $vote) : JsonResponse
    {
        $vote->fill($request->all());
        if ($vote->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->voteRepository->save($vote), 200);
    }

    public function destroy(Vote $vote) : JsonResponse
    {
        $this->voteRepository->destroy($vote);
        return response()->json(null, 204);
    }
}
