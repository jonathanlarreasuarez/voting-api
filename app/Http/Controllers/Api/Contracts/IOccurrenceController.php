<?php

namespace App\Http\Controllers\Api\Contracts;


use App\Models\Occurrence;
use Illuminate\Http\Request;

interface IOccurrenceController
{

    public function index(Request $request);

    public function store(Occurrence $request);

    public function show($id);

    public function update(Request $request, Occurrence $candidate);

    public function destroy(Occurrence $candidate);
}
