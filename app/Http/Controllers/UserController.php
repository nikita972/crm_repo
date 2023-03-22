<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fetch=User::orderByDesc('id')->get();
        $count=$fetch->count();
        $response=array(
            "data"=>$fetch,
         );
        return dataTables($response)->make(true);
        //return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'first_name'=>'required',
        ]);
        if($validator->passes()){
            $fetch=new User();
            $fetch->user_first_name=$request->first_name;
            $fetch->user_last_name=$request->last_name;
            $fetch->user_email=$request->email;
            $fetch->user_mobile=$request->mobile;
            $fetch->role_id=$request->roll_id;
            $fetch->password=$request->password;
            $fetch->status=$request->status;
            $fetch->created_by=1;
            $fetch->modified_by=1;
            $fetch->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
