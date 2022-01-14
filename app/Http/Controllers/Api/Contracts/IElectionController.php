<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Election;
use Illuminate\Http\Request;

interface IElectionController
{

    public function index(Request $request);

    public function store(Election $request);

    public function show($id);

    public function update(Request $request, Election $candidate);

    public function destroy(Election $candidate);
}
