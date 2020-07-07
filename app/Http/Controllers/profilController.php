<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    //
    
    public function index($id){


     

        $information=\App\authentification::whereUser_id($id)->first();
        $profil=\App\inscription::whereId($id)->first();
        $invest=\App\investissement::whereUser_id($id)->get();



      
         if(\Session::get('id')==$id):
          
            if($information!=null and $profil!=null):

                return View('/user/partials/home',compact('information'),compact('profil'))->withInvest($invest);


            else:


                return redirect('/user/connection');


            endif;

         else:

             return redirect('/user/connection');


         endif;

     



    }

    public function redirect(Request $request,$id){


        //dd($request->all());
        \App\authentification::whereUser_id($id)->update([

             "password"=>$request->input('mdp')
        ]);


        //alert()->success('Mot de passe modifier avec succès')->persistent("Close");


        return redirect('/user/home/'.$id);







    }
}
