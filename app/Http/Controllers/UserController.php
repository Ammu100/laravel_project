<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\support\facades\validator;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //inserting default table...

    public function index(){

        $users = User::all();

        return response()->json([
            'message'=> count($users). 'user found',
            'data'=> $users,
            'status'=> true
        ]);
    }

    //showing specific id..


    public function show($id){
        $users = User::find($id);
        if ($users !=null){
            return response()->json([
                'message'=> 'Record found',
                'data'=> $users,
                'status'=> true
            ]);
         } else {
             return response()->json([
            'message'=> 'Record not found',
            'data'=> [],
            'status'=> true
         ]);
        }
    }

    //inserting table ...


    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'message'=> 'please fix the errors',
                'errors'=> $validator->errors(),
                'status'=> false
             ]);
        }
        $user = new user;
        $user-> name= $request->name;
        $user-> email= $request->email;
        $user-> password= $request->password;
        $user->save();

        return response()->json([
            'message'=> 'users added successfully',
            'data'=> $user,
            'status'=> true
         ]);
    }

    //updating the table..


    public function update( request $request, $id){
     
    $user = user:: find($id);
    if ($user ==null){
        return response()->json([
            'message'=> 'users not found',
            'status'=> false
         ]);
    }

    $validator = validator::make($request->all(),[
        'name'=> 'required',
        'email'=> 'required|email',
    ]);
    if ($validator->fails()){
        return response()->json([
            'message'=> 'please fix the errors',
            'errors'=> $validator->errors(),
            'status'=> false
         ]);
    }

    $user->name =$request->name;
    $user->email =$request->email;
    $user -> save();

    return response()->json([
        'message'=> 'user updated successfully',
        'data'=> $user,
        'status'=> true
     ]);
}

//to delete a table...


public function destroy( request $request, $id){
    $user = user:: find($id);

    if ($user ==null){
        return response()->json([
            'message'=> 'users not found',
            'status'=> false
         ]);
}

$user->delete();
return response()->json([
    'message'=> 'user deleted successfully',
    'status'=> true
 ]);
}

}
