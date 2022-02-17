<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IOccurrenceVoteController;
use App\Http\Controllers\Controller;
use App\Models\OccurrenceVote;
use App\Repositories\OccurrenceVoteRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OccurrenceVoteController extends Controller implements  IOccurrenceVoteController
{
    private $occurrenceVoteRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        OccurrenceVoteRepository $occurrenceVoteRepository
    ){
        $this->occurrenceVoteRepository = $occurrenceVoteRepository;
    }

    public function index(Request $request) : JsonResponse
    {
        $occurrenceVote = $this->occurrenceVoteRepository->all($request);
        return response()->json($occurrenceVote, 200);
    }

    public function store(OccurrenceVote $request) : JsonResponse
    {
        $occurrenceVote = new OccurrenceVote($request->all());
        $occurrenceVote = $this->occurrenceVoteRepository->save($occurrenceVote);
        return response()->json($occurrenceVote, 201);
    }

    public function show($id) : JsonResponse
    {
        $occurrenceVote = $this->occurrenceVoteRepository->find($id);
        return response()->json($occurrenceVote, 200);
    }

    public function update(Request $request, OccurrenceVote $occurrenceVote) : JsonResponse
    {
        $occurrenceVote->fill($request->all());
        if ($occurrenceVote->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->occurrenceVoteRepository->save($occurrenceVote), 200);
    }

    public function destroy(OccurrenceVote $occurrenceVote) : JsonResponse
    {
        $this->occurrenceVoteRepository->destroy($occurrenceVote);
        return response()->json(null, 204);
    }
}
