<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IElectionController;
use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller implements  IElectionController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
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
