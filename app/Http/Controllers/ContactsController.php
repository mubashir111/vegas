<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactsController extends Controller
{

    public function index(){
        $enquiries = contacts::all();

        return view('admin.home',compact('enquiries'));

    }
    public function submit(Request $request){



        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required', // Corrected: Added 'required' rule
        ]);

        if ($validator->fails()) {
            // Validation failed, return JSON response with validation errors
            return back()->with('error', 'All fields are required!');
        }


        $equiry = new contacts();
        $equiry->name= $request->name;
        $equiry->email= $request->email;
        $equiry->subject= $request->subject;
        $equiry->message= $request->message;
        $equiry->save();


        return back()->with('success', 'All fields are required!');





    }
}
