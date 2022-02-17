<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IOccurrenceController;
use App\Http\Controllers\Controller;
use App\Models\Occurrence;
use Illuminate\Http\Request;

class OccurrenceController extends Controller implements IOccurrenceController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(Occurrence $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Occurrence $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Occurrence $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
