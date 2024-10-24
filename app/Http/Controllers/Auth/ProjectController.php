<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = project::all();
        dd($data);
        return view('index', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = project::findOrFail($id);
        return view('project', ['data' => $data]);
    }
}
