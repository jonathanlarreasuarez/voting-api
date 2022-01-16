<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\ICandidateController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Repositories\CandidateRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CandidateController extends Controller implements ICandidateController
{

    private $candidateRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        CandidateRepository $candidateRepository
    ) {
        $this->candidateRepository = $candidateRepository;
    }

    public function index(Request $request): JsonResponse
    {
        $candidate = $this->candidateRepository->all($request);
        return response()->json($candidate, 200);
    }


    public function store(CandidateRequest $request): JsonResponse
    {
        $candidate = new Candidate($request->all());
        $candidate = $this->candidateRepository->save($candidate);
        return response()->json($candidate, 201);
    }


    public function show($id): JsonResponse
    {
        $candidate = $this->candidateRepository->find($id);
        return response()->json($candidate, 200);
    }


    public function update(CandidateRequest $request, Candidate $candidate): JsonResponse
    {
        $candidate->fill($request->all());
        if ($candidate->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->candidateRepository->save($candidate), 200);
    }


    public function destroy(Candidate $candidate): JsonResponse
    {
        $this->candidateRepository->destroy($candidate);
        return response()->json(null, 204);
    }
}
