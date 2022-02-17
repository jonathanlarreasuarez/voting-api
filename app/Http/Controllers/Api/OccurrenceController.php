<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IOccurrenceController;
use App\Http\Controllers\Controller;
use App\Models\Occurrence;
use App\Repositories\OccurrenceRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OccurrenceController extends Controller implements IOccurrenceController
{

    private $occurrenceRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        OccurrenceRepository $occurrenceRepository
    ){
        $this->occurrenceRepository = $occurrenceRepository;
    }

    public function index(Request $request) : JsonResponse
    {
        $candidate = $this->occurrenceRepository->all($request);
        return response()->json($candidate, 200);
    }

    public function store(Occurrence $request) : JsonResponse
    {
        $occurrence = new Occurrence($request->all());
        $occurrence = $this->occurrenceRepository->save($occurrence);
        return response()->json($occurrence, 201);
    }

    public function show($id) : JsonResponse
    {
        $occurrence = $this->occurrenceRepository->find($id);
        return response()->json($occurrence, 200);
    }

    public function update(Request $request, Occurrence $occurrence) : JsonResponse
    {
        $occurrence->fill($request->all());
        if ($occurrence->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->occurrenceRepository->save($occurrence), 200);
    }

    public function destroy(Occurrence $occurrence) : JsonResponse
    {
        $this->occurrenceRepository->destroy($occurrence);
        return response()->json(null, 204);
    }
}
