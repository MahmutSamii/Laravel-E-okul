<?php

namespace App\Http\Controllers\BackTeacher;

use App\Http\Controllers\Controller;
use App\Models\ClassData;
use App\Models\Classes;
use App\Models\SchoolStuff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolstuff = SchoolStuff::where('id', Auth::user()->resource_id)->first();
        $classData = ClassData::where('teacher_id', $schoolstuff->id)->get();
        return view('backteacher.class.index', compact( 'classData'));
    }

    public function indexStudent($id)
    {
        $students = Student::where('classroom', $id)->get();
        $class = Classes::where('id', $id)->first();
        return view('backteacher.class.studentIndex', compact('students', 'class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        dd($id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
