<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\SchoolStuff;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolStuff = SchoolStuff::get();
        return view('back.staffMember.index', compact('schoolStuff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::get();
        return view('back.staffMember.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new SchoolStuff;
        $teacher->department_id = $request->department;
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->is_teacher = $request->is_teacher;
        $imageName = str_slug($request->name) . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $imageName);
        $teacher->image = 'uploads/' . $imageName;
        $teacher->created_at = now();
        $teacher->save();
        toastr()->success('Başarılı', 'Eleman Başarıyla Eklendi');
        return redirect()->back();
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
        $schoolStuff = SchoolStuff::findOrFail($id);
        return view('back.staffMember.edit',compact('schoolStuff'));
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
