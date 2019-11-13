<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use DB;
//use App\Http\Requests\UserRequest as adduser;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('inscription');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$jose = Str::random(60);
        //dd($request);
        $messages=[
            'required' => 'The attributes field is required'
        ];

            $Validator=Validator::make(
                $request->all(),
                [
            'nom'               => 'required|min:2|max:20',
            'prenom'            => 'required|min:2|max:25',
            'email'             => 'required|unique:users|email',
            'pays'              => 'required',
            'ville'             => 'required|min:2|max:15',
            'numero'            => 'required|integer',
            'usser'             => 'required|min:3|max:12|unique:users,usser',
            'password'          => 'required|confirmed|min:4|max:12',
            'password_confirmation' => 'required|min:4|max:12',
                ],
                $messages
    
    );
    
    if($Validator->fails()){
            $Response = $Validator->messages();

    }else{
             $Response =['success' => 'ok ok '];

             //Insertion des donnees dans la base de donnes
             $request['token'] =Str::random(60);
     
             $user=User::create($request->all());
        
    }

        return response()->json($Response,200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function save_serialize_data()
    {
        //
        dd($_POST['name']);
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        
        $data= DB::table('users')->insert([
            name=>$name,
            email=>$email,
            password=>$password
        ]);
    }
}
