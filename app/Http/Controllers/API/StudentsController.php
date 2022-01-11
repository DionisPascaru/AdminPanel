<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\StudentsResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return response(['students' => StudentsResource::collection($students), 'message' => 'Students received.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
           'name' => 'required|max:255',
           'email' => 'required|max:55',
           'phone' => 'required'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $students = Student::create($data);

        return $this->sendResponse(new StudentsResource($students), 'Student created.');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $student = Student::find($id);
        if(is_null($student)){
            return $this->sendError('Student does not exist.');
        }

        return $this->sendResponse(new StudentsResource($student), 'Student received.');
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Student $student)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator-errors());
        }

        $student->name = $input['name'];
        $student->email = $input['email'];
        $student->phone = $input['phone'];
        $student->save();

        return $this->sendResponse(new StudentsResource($student), 'Student updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return $this->sendResponse([], 'Student deleted.');
    }
}
