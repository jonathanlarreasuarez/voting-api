<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IVoterController;
use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;

class VoterController extends Controller implements  IVoterController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(Voter $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Voter $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Voter $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
