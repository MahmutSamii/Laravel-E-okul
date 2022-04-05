<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get();
        return view('back.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::get();
        $students = Student::all()->last();
        if ($students == null) {
            $student_no = 21420151;
        } else {
            $student_no = 2142015;
        }
        return view('back.student.create', compact('classes', 'student_no'), compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $class = Classes::where('id',$request->classroom)->first();
        $numOfStudent = Student::where('classroom',$request->classroom)->count();
        if ($class->quota <= $numOfStudent) {
            toastr()->error( 'Seçmiş Olduğunuz Sınıf Kontenjanı Dolu Lütfen Başka Bir Sınıf Seçiniz');
            return redirect()->back();
        } else if ($class->quota >= $numOfStudent) {
            $student->name = $request->name;
            $student->student_no = $request->student_no;
            $student->phone = $request->phone;
            $student->classroom = $request->classroom;
            $student->parent_name = $request->parent_name;
            $imageName = str_slug($request->student_no) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $student->image = 'uploads/' . $imageName;
            $student->created_at = now();
            $student->save();
            toastr()->success('Başarılı', 'Öğrenci Başarıyla Eklendi');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        $destination = public_path('uploads') . $student->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $student->delete();
        toastr()->success('Başarılı', 'Öğrenci Başarıyla Silindi');
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
        $students = Student::findOrFail($id);
        $classes = Classes::get();
        return view('back.student.edit', compact('students', 'classes'));
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
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->student_no = $request->student_no;
        $student->phone = $request->phone;
        $student->parent_name = $request->parent_name;
        $student->classroom = $request->classroom;
        if ($request->image == '') {
            $student->image = $student->image;
        }
        if ($request->hasFile('image')) {
            $destination = public_path('uploads') . $student->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $imageName = str_slug($request->student_no) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $student->image = 'uploads/' . $imageName;
        }
        $student->updated_at = now();
        $student->update();
        toastr()->success('Başarılı', 'Öğrenci Başarıyla Güncellendi');
        return redirect()->route('admin.students.index');
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
