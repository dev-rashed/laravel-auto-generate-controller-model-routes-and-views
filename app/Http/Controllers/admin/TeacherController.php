<?php 


namespace App\Http\Controllers;

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
        // $teachers = \App\Models\Teacher::all();
        // return view('teacher.index',compact( $teachers ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  return view('teacher.create');
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

        // \App\Models\Teacher::create();
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
        // $teacher = \App\Models\Teacher::find($id);
        // return view('teacher.show',compact( $teacher ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $teacher = \App\Models\Teacher::find($id);
        // return view('teacher.edit',compact( $teacher ));
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
        // $teacher = \App\Models\Teacher::find($id);

        // $request->validate([
        //     'name'=>'required'
        // ]);

        // $teacher->name => $request->name;
        // $teacher->save();

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
        // $teacher = \App\Models\Teacher::find($id);
        // $teacher->delete();

        // return view('teacher.index');
    }
}
