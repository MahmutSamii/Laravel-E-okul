<?php

namespace App\Http\Controllers;

use App\Models\SchoolStuff;
use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\View\View;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $lessons = Lesson::get();
        return view('back.lesson.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $staffs = SchoolStuff::get();
        return view('back.lesson.create',compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $lesson = new Lesson;
        $lesson->lesson = $request->lesson;
        $lesson->lecturer = $request->lecturer;
        $lesson->status = $request->status;
        $lesson->created_at = now();
        $lesson->save();
        toastr()->success('Başarılı', 'Ders Başarıyla Eklendi');
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
            $lesson = Lesson::findOrFail($id);
            $lesson->delete();
            toastr()->success('Başarılı', 'Ders Başarıyla Silindi');
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
        $lessons = lesson::findOrFail($id);
        return view('back.lesson.edit',compact('lessons'));
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
        $lesson = Lesson::findOrFail($id);
        $lesson->lesson = $request->lesson;
        $lesson->status = $request->status;
        $lesson->updated_at = now();
        $lesson->save();
        toastr()->success('Başarılı', 'Ders Başarıyla Güncellendi');
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
