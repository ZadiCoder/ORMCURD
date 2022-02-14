<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Student;
class StudentController extends Controller
{
    public function show(){
        $student = [];
      //$student = Student::all(); 
      //$student = Student::where('city','Lahore')->orderBy('name')->get();   
      //$student = Student::find(2);
      //$student = Student::where('city','Karachi')->first();
      //$student = Student::firstWhere('city','Karachi');
      //$student = Student::firstOrCreate(
          //['name'=>'Zadi'],
          //['email'=>'zadi@gmail.com', 'city'=>'Multan', 'marks'=>'70']
      //);
      //$student = Student::firstOrNew(
        //['name'=>'Atiq'],
        //['email'=>'atiq@gmail.com', 'city'=>'Multan', 'marks'=>'90']
    //);   
    //$student->save(); 
    //$student = Student::where('city','Lahore')->count();
    //$student = Student::where('city','Lahore')->min('marks');
    //$student = Student::all()->min('marks');
    //dd($student);
    //Insert New Record 
/*         $student = new Student;
        $student->name = 'Aasd';
        $student->email = 'asad@gmail.com';
        $student->city = 'Lahore';
        $student->marks = '40';
        $student->save(); */
    //Insert New Record using Create Method
/*         $student = Student::create([
            'name'=>'Mazhar',
            'email'=>'mazhar@gmail.com',
            'city'=>'Karachi',
            'marks'=>65
        ]); */
    //Update
/*     $student = Student::find(7);
    $student->name = 'Aasd Rasool';
    $student->email = 'asadrasool@gmail.com';
    $student->city = 'Multan';
    $student->marks = '60';
    $student->save(); */
    //Mass Update
       //Student::where('city','Lahore')->update(['marks'=>100]);
    //Update Or Create
/*         Student::updateOrCreate(
            ['name'=>'Chand'],
            ['email'=>'chand@gmail.com','city'=>'Lahore','marks'=>20]
        ); */
    //Delete Method
/*         $student = Student::find(5);
        $student->delete(); */
    //Delete using Query Method 
        $student = Student::where('city','Multan')->delete();
        dd($student);
    return view('welcome', ['student'=>$student]);
    }
}
 