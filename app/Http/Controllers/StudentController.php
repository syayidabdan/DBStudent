<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{  
     //MENAMPILKAN DATA
    public function index()
    {
    //untuk mengambil data buat satu variabel yang isinya model:all
        $student = Student::all();
        //compact gunanya mengubah jadi array assoc
        return view('home',compact(['student']));
    }

    //menampilkan formulir untuk menginputkan data
    public function create(){
        return view('about');
    }

    //progress create data 
    public function store(Request $request){
        $student = Student::create($request->all());
        return Redirect('home');
    }

        //menampilkan halaman edit
        public function edit($id){
            $student = Student::find($id);
            return view('update.edit',compact(['student']));
        }

        public function update($id, Request $request){
            $student = Student::find($id);
            $student->update($request->all());
            return redirect('home');
        }

        public function destroy($id){
            $student = Student::find($id);
            $student->delete();
            return redirect('home');
        }
}
