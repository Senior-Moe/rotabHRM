<?php

namespace App\Http\Controllers;

use App\Models\Employee_Main_Info;
use Illuminate\Http\Request;

class Employee_Main_Info extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //view the form
        return view('Employee_Main_Info');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee_Main_Info $employee_Main_Info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee_Main_Info $employee_Main_Info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee_Main_Info $employee_Main_Info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee_Main_Info $employee_Main_Info)
    {
        //
    }
}
