<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = \App\Models\Student::all();
        // return view('student.index',compact( $students ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>'required'
        // ]);

        // \App\Models\Student::create();
        // return response([
        //     'data'=>'1',
        //     'message'=>'Successfully added'
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student = \App\Models\Student::find($id);
        // return view('student.show',compact( $student ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $student = \App\Models\Student::find($id);
        // return view('student.edit',compact( $student ));
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
        // $student = \App\Models\Student::find($id);

        // $request->validate([
        //     'name'=>'required'
        // ]);

        // $student->name => $request->name;
        // $student->save();

        // return response ([
        //     'data' => 1,
        //     'message' => 'Updated'
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $student = \App\Models\Student::find($id);
        // $student->delete();

        // return view('student.index');
    }
}
