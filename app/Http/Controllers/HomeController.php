<?php

namespace App\Http\Controllers;

use App\Models\category;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Queue\RedisQueue;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    function index(Request $request)
    {

        return view('users.addform');
    }

    function saveStudent(Request $request)
    {
        $category = category::all();
        $request->validate(
            [
                'username' => 'required | unique:users,username|',
                'student_password' => 'required',
                'name' => 'required',
                'class' => 'required | integer | min: -2 | max: 10',
                'section' => 'required | alpha | max:1 | min:1',
                'roll' => 'required | integer|min:0'

            ],
            [
                'class.integer' => "Please Select Valid class",
            ]
        );
        // User::create([
        //     'username'=> $request['username'],
        //     'password'=>$request['student-password'],
        //     'name'=>$request['name'],
        //     'class'=>$request['class'],
        //     'section'=>$request['section'],
        //     'roll'=>$request['roll'],

        // ]);
        $student = new User();
        $student->username = $request->username;
        $student->password = $request->student_password;
        $student->name = $request->name;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->roll = $request->roll;
        $student->save();
        toast('Your Post as been submited!', 'success');

        return redirect()->back()->with("status", "added successfully");

        // return view('home');

    }

    public function viewUsers(Request $request)
    {
        $user = User::find(1);
       


        // return view("users.viewusers", ['users' => $users]);
    }

    public function edit(Request $request)
    {
        $student = User::find($request->id);
        return view("users.update", compact('student'));
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'student_password' => 'required',
                'name' => 'required',
                'class' => 'required | integer | min: -2 | max: 10',
                'section' => 'required | alpha | max:1 | min:1',
                'roll' => 'required | integer|min:0'

            ],
            [
                'class.integer' => "Please Select Valid class",
            ]
        );


        $user =   User::find($request['id'])->update(["name"=>$request['name'],"class"=> $request['class'], "secion" => $request['section'], "roll"=> $request['roll'],"password"=> $request['student_password'],],);
        // return $user;

        toast("$request->username updated successfully", "success");
        return redirect()->back();
    }
}
