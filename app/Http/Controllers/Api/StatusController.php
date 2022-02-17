<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IStatusController;
use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StatusController extends Controller implements IStatusController
{
    private $statusRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        Status $statusRepository
    ){
        $this->statusRepository = $statusRepository;
    }

    public function index(Request $request) : JsonResponse
    {
        $status = $this->statusRepository->all($request);
        return response()->json($status, 200);
    }

    public function store(Status $request) : JsonResponse
    {
        $status = new Status($request->all());
        $status = $this->statusRepository->save($status);
        return response()->json($status, 201);
    }

    public function show($id) : JsonResponse
    {
        $status = $this->statusRepository->find($id);
        return response()->json($status, 200);
    }

    public function update(Request $request, Status $status) : JsonResponse
    {
        $status->fill($request->all());
        if ($status->isClean()){
            return response()->json(__('messages.not-change'), 301);
        }
        return response()->json($this->statusRepository->save($status), 200);
    }

    public function destroy(Status $status) : JsonResponse
    {
        $this->statusRepository->destroy($status);
        return response()->json(null, 204);
    }
}
