<?php

namespace App\Http\Controllers;

use App\Models\Users_table;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UsersTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'email'=>'required|email',
            'name'=>'required',
            'contact'=>'required',
            'password'=>'required',
            'cpassword'=>'required'
        ],[
            'email.required'=>"email is required",
            'name.required'=>"name is required",
            'contact.required'=>"contact is required",
            'password.required'=>"password is required",
            'cpassword.required'=>"confirm password is required"
        ]
    );
    if($validated){
        $email=$request->email;
        $name=$request->name;
        $contact=$request->contact;
        $password=$request->password;
        $cpassword=$request->cpassword;
        if($password==$cpassword){
            $modelnew= new Users_table();
            $modelnew->email=$email;
            $modelnew->name=$name;
            $modelnew->contact=$contact;
            $modelnew->password=$password;
            if($modelnew->save()){
                return back()->with('success','Sign up successful!');
            }
            else{
                return back()->with('error','Sign up error!');
            }

        }
        else{
            return back()->with('error','Password did not match');
        }
    }

    }
    public function post_login(Request $request){
        $email=$request->email;
        $password=$request->password;
        $data=Users_table::where(['email'=>$email,'password'=>$password])->get();
        if(count($data)>0){
             $request->session()->put('sid',$data);
             return redirect('menu');
        }
        else {
            return back()->with('error',"Email or Password is not correct");
        }
    }
    public function show(Users_table $users_table,$id){
            $user=Users_table::find($id);
            return view('pages.profile',['user'=>$user]);

    }
    public function edit(Users_table $users_table)
    {
        //
    }

    public function update(Request $request, Users_table $users_table)
    {
        //
    }

    public function destroy(Users_table $users_table)
    {
        //
    }
}
