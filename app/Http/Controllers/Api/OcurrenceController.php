<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IOcurrenceController;
use App\Http\Controllers\Controller;
use App\Models\Ocurrence;
use Illuminate\Http\Request;

class OcurrenceController extends Controller implements IOcurrenceController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(Ocurrence $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Ocurrence $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Ocurrence $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
