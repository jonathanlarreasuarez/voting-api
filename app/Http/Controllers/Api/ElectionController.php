<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IElectionController;
use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller implements  IElectionController
{

    private $candidateRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        ElectionR $candidateRepository
    ) {
        $this->candidateRepository = $candidateRepository;
    }

    public function index(Request $request)
    {
        $candidate = $this->candidateRepository->all($request);
        return response()->json($candidate, 200);
    }

    public function store(Election $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Election $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Election $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
