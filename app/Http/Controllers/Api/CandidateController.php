<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\ICandidateController;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller implements ICandidateController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(Candidate $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Candidate $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Candidate $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
