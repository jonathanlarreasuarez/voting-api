<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Ocurrence;
use Illuminate\Http\Request;

interface IOcurrenceController
{

    public function index(Request $request);

    public function store(Ocurrence $request);

    public function show($id);

    public function update(Request $request, Ocurrence $candidate);

    public function destroy(Ocurrence $candidate);
}
