<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $department = Department::get();
      return view('backdirector.department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backdirector.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        $department->department_name = $request->department_name;
        $department->slug = str_slug($request->department_name);
        $department->status = $request->status;
        $department->created_at = now();
        $department->save();
        toastr()->success('Başarılı', 'Departman Başarıyla Eklendi');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Department::findOrFail($id); //@FIXME show is not used for delete
        $lesson->delete();
        toastr()->success('Başarılı', 'Departman Başarıyla Silindi');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('backdirector.department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);
        $department->department_name = $request->department_name;
        $department->slug = str_slug($request->department_name);
        $department->status = $request->status;
        $department->updated_at = now();
        $department->save();
        toastr()->success('Başarılı', 'Departman Başarıyla Güncellendi');
        return redirect()->route('admin.departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

}
