<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home() {
        $students = Students::all();
        return view("welcome", [
            "students"=>$students
        ]);
    }

    public function addStudent(){
        return view("create-student");
    }

    public function infoStudent(Request $request) {
        $request->validate([
            "name"=>"required",
            "age"=>"required",
            "address"=>"required",
            "telephone"=>"required|min:10|max:20",
        ],[
            "required"=>"Vui lòng điền đầy đủ thông tin",
            "min"=>"Phải nhập tối thiểu :min",
            "max"=>"Nhập giá trị không vượt quá :max"
        ]);
        $student = new Students();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->telephone = $request->input('telephone');
        $student->save();

        return redirect()->to("/");
    }
}
