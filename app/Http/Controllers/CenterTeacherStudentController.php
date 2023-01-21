<?php

namespace App\Http\Controllers;

use App\CenterTeacherStudent;
use Illuminate\Http\Request;

/**
 * Class CenterTeacherStudentController
 * @package App\Http\Controllers
 */
class CenterTeacherStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centerTeacherStudents = CenterTeacherStudent::paginate();

        return view('center-teacher-student.index', compact('centerTeacherStudents'))
            ->with('i', (request()->input('page', 1) - 1) * $centerTeacherStudents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centerTeacherStudent = new CenterTeacherStudent();
        return view('center-teacher-student.create', compact('centerTeacherStudent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CenterTeacherStudent::$rules);

        $centerTeacherStudent = CenterTeacherStudent::create($request->all());

        return redirect()->route('center-teacher-students.index')
            ->with('success', 'CenterTeacherStudent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centerTeacherStudent = CenterTeacherStudent::find($id);

        return view('center-teacher-student.show', compact('centerTeacherStudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centerTeacherStudent = CenterTeacherStudent::find($id);

        return view('center-teacher-student.edit', compact('centerTeacherStudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CenterTeacherStudent $centerTeacherStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CenterTeacherStudent $centerTeacherStudent)
    {
        request()->validate(CenterTeacherStudent::$rules);

        $centerTeacherStudent->update($request->all());

        return redirect()->route('center-teacher-students.index')
            ->with('success', 'CenterTeacherStudent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $centerTeacherStudent = CenterTeacherStudent::find($id)->delete();

        return redirect()->route('center-teacher-students.index')
            ->with('success', 'CenterTeacherStudent deleted successfully');
    }
}
