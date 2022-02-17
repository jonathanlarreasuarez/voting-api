<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Status;
use Illuminate\Http\Request;

interface IStatusController
{

    public function index(Request $request);

    public function store(Status $request);

    public function show($id);

    public function update(Request $request, Status $status);

    public function destroy(Status $status);
}
