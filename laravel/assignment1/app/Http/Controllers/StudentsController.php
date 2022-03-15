<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Contracts\Services\StudentServiceInterface;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\MySendMail;

class StudentsController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get();
  
        return view('students.index')->with([
            'students' => $students
        ]);
    }
   
    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }
  
    /**
     * Store a newly created student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);
  
        Student::create($request->all());
   
        return redirect()->route('student.index')
                        ->with('success','Student created successfully.');
    }
   
    /**
     * Display the specified student.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show')->with([
            'student' => $student
        ]);
    }
   
    /**
     * Show the form for editing the specified student.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit')->with([
            'student' => $student
        ]);
    }
  
    /**
     * Update the specified student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
  
        $student->update($request->all());
  
        return redirect()->route('student.index')
                        ->with('success','Student updated successfully');
    }
  
    /**
     * Remove the specified student from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
  
        return redirect()->route('student.index')
                        ->with('success','Student deleted successfully');
    }
    public function importExportView()
    {
       return view('students.import');
    }
    public function export()
    {
        return Excel::download(new StudentsExport, 'users.csv');
    }

    public function import()
    {
        Excel::import(new StudentsImport,request()->file('file'));

        return back();
    }

    public function mail()
    {
        $student_detail = [
            'first_name' => 'test',
            'last_name' => 'xyz',
            'address' => 'test xyz'
        ];
        Mail::to('test@gmail.com')->send(new MySendMail($student_detail));
        return 'Email has been sent';
    }
}