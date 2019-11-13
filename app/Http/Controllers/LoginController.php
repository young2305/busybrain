<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $val = $_GET['username'];
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        
        $messages=[
            'required' => 'The attributes field is required'
        ];

        $Validator=Validator::make(
            $request->all(),
        [
        'usser'             => 'required|min:4',
        'password'          => 'required|min:4',
            ],
            $messages

        );

        if($Validator->fails()){
            
            //dd($Validator->messages());
            $Response = $Validator->messages();

        }else{
             //$Response =['success' => 'ok ok '];

            //Controlle des donnees dans la base de donnes
                        $resultat = auth()->attempt([
                            'usser' => request('usser'),
                            'password' => request('password'),
                            'isadmin' => 0 ,
                        ]);



                    $resultat1 = auth()->attempt([
                            'usser' => request('usser'),
                            'password' => request('password'),
                            'token' => 1,
                        ]);


                    //dd($resultat1 and $resultat);

                    if($resultat1){
                        $Response =['success' => 'Pour activer votre compte, veuillez valider votre emaail'];
                        //flash("Pour activer votre compte, veuillez valider votre emaail.")->error();
                        return back();
                    }

                    if($resultat){
                        $Response =['success' => 'Profitez de votre Espace'];
                        //flash("Profitez de votre Espace")->success();

                        return redirect('adminacceuil');
                    }else{
                        $Response =['success' => '3Erreur'];
                    }

                    }

        



        //return response()->json(["ok"],200);
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

}
