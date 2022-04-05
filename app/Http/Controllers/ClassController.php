<?php

namespace App\Http\Controllers;

use App\Models\ClassData;
use App\Models\Lesson;
use App\Models\Student;
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
        return view('back.classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = SchoolStuff::all();
        $lessons = Lesson::get();
        return view('back.classes.create', compact('teacher','lessons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $class = new Classes;
        $class->class_name = $request->class_name;
        $class->teacher_of_class = $request->teacher_of_class;
        $class->quota = $request->quota;
        $class->created_at = now();
        $class->save();


        $lastClassId = Classes::get()->last()->id;
        foreach ($request->lesson_id as $classData){
            $check = Lesson::where('id',$classData)->first()->lecturer;
            $data = new ClassData();
            $data->class_id = $lastClassId;
            $data->lesson_id = $classData;
            $data->teacher_id = $check;
            $data->save();
        }

        toastr()->success('Başarılı', 'Sınıf Başarıyla Eklendi');
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
        $classes = Classes::findOrFail($id);
        $classes->delete();
        if ($classes->delete()){
            Student::where('classroom')->set(null);
        }
        $classData = ClassData::where('class_id',$id);
        $classData->delete();
        toastr()->success('Başarılı', 'Sınıf Başarıyla Silindi');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = SchoolStuff::all();
        $classes = Classes::findOrFail($id);
        return view('back.classes.edit', compact('classes'), compact('teacher'));
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
        $classes = Classes::findOrFail($id);
        $classes->class_name = $request->class_name;
        $classes->teacher_of_class = $request->teacher_of_class;
        $classes->quota = $request->quota;
        $classes->updated_at = now();
        $classes->update();
        toastr()->success('Başarılı', 'Sınıf Başarıyla Güncellendi');
        return redirect()->back();
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
