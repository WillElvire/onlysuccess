<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class authentificationController extends Controller
{
    //

    public function register(Request $request){


         $email=$request->input('email');
         $mdp=$request->input('mdp');
         $error="";


        $validate=\App\authentification::whereEmailAndPassword($email,$mdp)->first();
        
       
        if($validate!=null):


            
         
            \Session::put('id',$validate->user_id);
            


            alert()->success('Connection Etablie avec succès', 'Bienvenue sur votre back office')->persistent("Close");

             return redirect('/user/home/'.$validate->user_id);


        else:


            alert()->error('Email ou mot de passe non correct', 'Problème lors de la connection')->persistent("Close");

             
            return redirect('/user/connection')->withError($error);



        endif;




         
       
        
        //return View('layout/users/profil');

        


    }



    public function index(){


       

        if(\Auth::check()):

            return View('layout/users/profil');

            

        else:

            
            return View('layout/users/home');

        endif;



         
    }



    public function __construct(){




    }



}
