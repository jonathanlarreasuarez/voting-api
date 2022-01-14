<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Contracts\IStatusController;
use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller implements IStatusController
{
    //
    public function index(Request $request)
    {
        // TODO: Implement index() method.
    }

    public function store(Status $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request, Status $candidate)
    {
        // TODO: Implement update() method.
    }

    public function destroy(Status $candidate)
    {
        // TODO: Implement destroy() method.
    }
}
