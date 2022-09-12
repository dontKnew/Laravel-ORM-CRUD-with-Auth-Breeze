<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request, $orderby = null, $method = null){

        if($request->method()=="GET"){
            if($method == "desc" && $orderby!==null){
                $student = Student::orderByDesc($orderby)->cursorPaginate(10);
                return view("dashboard", ["students"=>$student, "method"=>"asc"]);
            }else {
                $student = Student::simplePaginate(10);
                return view("dashboard", ["students"=>$student, "method"=>"desc"]);
            }
        }else if($request->method("POST")){
            if($request->input("discover")!==null){
                
                $data = $request->input("discover");
                $student = Student::where("id","like","%$data%")
                            ->orWhere("fees","like","%$data%")
                            ->orWhere("contact","like","%$data%")
                            ->orWhere("created_at","like","%$data%")
                            ->orWhere("name","like","%$data%")
                            ->orWhere("father_name","like","%$data%")
                            ->orWhere("subject","like","%$data%")
                            ->get();
                
                // if($student->count()==0){
                //     $student = Student::where("fees","like","%$data%")->get();
                // }else if($student->count()==0){
                //     $student = Student::where("contact","like","%$data%")->get();
                // }else if($student->count()==0){
                //     $student = Student::where("created_at","like","%$data%")->get();
                // }else if($student->count()==0){
                //     $student = Student::where("name","like","%$data%")->get();
                // }else if($student->count()==0){
                //     $student = Student::where("father_name","like","%$data%")->get();
                // }else if($student->count()==0){
                //     $student = Student::where("subject","like","%$data%")->get();
                // }
                return view("dashboard", ["students"=>$student, "method"=>"desc", "showResetBtn"=>true]);
            }else {
                $student = Student::simplePaginate(10);
                return view("dashboard", ["students"=>$student, "method"=>"asc"]);
            }
        }

        return redirect()->route("dashboard");
    }

    public function addStudent(Request $request){
        
        if($request->method()=="POST"){ 
            // dd($request->all());  
               $students =  new Student;
               $name = $request->input("name");
               $students->name = $name;

               $father_name = $request->input("father_name");
               $students->father_name = $father_name;

               $contact = $request->input("contact");
               $students->contact = $contact;

               $subject = $request->input("subject");
               $students->subject = $subject;

               $fees = $request->input("fees");
               $students->fees = $fees;

               if($students->save()){
                   return redirect()->route("dashboard")->with("success", "Student added Successfull");
               }else {
                   return redirect()->route("dashboard")->with("error", "Student could not added");
               }
        }
        return view("add-student");
   }

   public function updateStudent(Request $request, $id=null){
            if($id!==null){
                $students = new Student;
                
                if($request->method()=="GET"){
                    $student = $students->find($id);
                    return view("update-student", ["student"=>$student]);
                    
                }else if($request->method()=="PUT"){
                    // dd($request->all());
                    $students = Student::find($id);
                    $name = $request->input("name");
                    $students->name = $name;

                    $father_name = $request->input("father_name");
                    $students->father_name = $father_name;

                    $contact = $request->input("contact");
                    $students->contact = $contact;

                    $subject = $request->input("subject");
                    $students->subject = $subject;

                    $fees = $request->input("fees");
                    $students->fees = $fees;
    
                    if($students->save()){
                        return redirect()->route("dashboard")->with("success", "Student updated Successfull");
                    }else {
                        return redirect()->route("dashboard")->with("error", "Student could not updated");
                    }    
                }
            }
        return redirect()->route("dashboard");
    }

    public function deleteStudent($id=null){
        if($id !==null){
            $student = Student::destroy($id);
            if($student){
                return redirect()->route("dashboard")->with("success", "Student Delete Successfully");
            }else {
                return redirect()->route("dashboard")->with("error", "Student could not delete");
            }
        }else {
            $student = Student::truncate();
            if($student){
                return redirect()->route("dashboard")->with("success", "All Student Delete Successfully");
            }else {
                return redirect()->route("dashboard")->with("error", "Student could not delete");
            }
        }
    }
}
