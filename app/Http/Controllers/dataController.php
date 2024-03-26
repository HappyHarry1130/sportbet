<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class dataController extends Controller
{
    //
    public function index(Request $request)
    {                
        $users=User::all();
        return view('data.DataView', ['users' => $users]);
    }


 

    public function newUser(Request $request)
    {
        $name=$request->input('name');
        return view('data.newUser',['oldname'=>$name]);
        /*$user = new User;
        $user->name = 'John Doe12';
        $user->email = 'john@example.com12';
        $user->password='jkkkk';
        if($user->save())return view('data.successSave');*/
        
    }
    public function GetData($data)
    {
        return ($data."dfsfs");
        

    }
    public function save(Request $request)
    {
        $name=$request->input('name');        
        $email=$request->input('Email');
        $password=$request->input('password');
        $FreelancerId=$request->input('freelancer');
        $UpworkId=$request->input('upwork');
        
        
        $user = new User;
        $user->name=$name;
        $user->email=$email;
        $user->password=$password;
        $user->FreelancerId=$FreelancerId;
        $user->UpworkId=$UpworkId;
        $user->save();       
        $users=User::all();
        return view('data.DataView', ['users' => $users]);
    }
    public function showRole()
    {
        $roles=Role::all();
        return view('role.DataView', ['roles' => $roles]);
    }

    public function make_RelationShip()
    {
        $user1=User::all();
        $user=$user1[0];

        $role=Role::all();
        $role1=$role[0];
        
        if ($user) {
            $user->roles()->attach($role1->id); // Assuming role IDs 1, 2, and 3 exist
        } else {
            // Handle case when user is not found
            echo "User not found.";
        }
        
        if($user)
        {$roles=$user->roles;
        return $roles[0]->name;}
        
    }
}
