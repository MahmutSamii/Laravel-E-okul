<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\SchoolStuff;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::get();
        return view('backdirector.classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $teacher = SchoolStuff::all();
         return view('backdirector.classes.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new Classes;
        $class->class_name = $request->class_name;
        $class->teacher_of_class = $request->teacher_of_class;
        $class->quota = $request->quota;
        $class->save();
        toastr()->success('Başarılı', 'Sınıf Başarıyla Eklendi');
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
        $classes = Classes::findOrFail($id);
        $classes->delete();
        toastr()->success('Başarılı', 'Sınıf Başarıyla Silindi');
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
        $teacher = SchoolStuff::all();
        $classes = Classes::findOrFail($id);
        return view('backdirector.classes.edit', compact('classes'),compact('teacher'));
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
        $classes = Classes::findOrFail($id);
        $classes->class_name = $request->class_name;
        $classes->teacher_of_class = $request->teacher_of_class;
        $classes->quota = $request->quota;
        $classes->update();
        toastr()->success('Başarılı', 'Sınıf Başarıyla Güncellendi');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
