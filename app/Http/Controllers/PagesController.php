<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function welcome(){
        $data =[
            'name'=>'UG',
            'age'=>17
        ];
        return view('welcome')->with($data);
    }

    public function main()
    {
        return view('main');
    }

    public function profile($id,$name){
        $data=[
            'id'=>$id,
            'name'=>$name
        ];
        return view('profile')->with($data);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Student();
        $name= $request->name;
        $address= $request->address;
        $dob = $request->DOB;

        echo("{$name}");echo("<br><br>");
        echo("{$address}");echo("<br><br>");
        echo("{$dob}");echo("<br><br>");

        $student->name=$name;
        $student->address=$address;
        $student->dob=$dob;

        //image
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension =  $request->file('img')->getClientOriginalExtension();
        $filenametostore= $filename."_".time().".".$extension;
        $img = Image::make($request->file('img'));
        $img-> save('storage/image'.$filenametostore);

        $student->img= 'storage/image'.$filenametostore;

        $student->save();

        return redirect('/list');

    }
    public function list(){
        $students = Student::get();
        return view('list')-> with('students',$students);
    }
}

