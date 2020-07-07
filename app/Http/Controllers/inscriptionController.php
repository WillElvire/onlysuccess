<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
class inscriptionController extends Controller
{
    //

    public function shop(Request $req){
        $name=$req->input('first_name');

        $prenom=$req->input('last_name');

       
        $mobile=$req->input('mobile');

        $email=$req->input('email');

       

       



        $verify =\App\inscription::whereEmail($email)->get();

        $number=\App\inscription::whereNumber($mobile)->get();











        $pass=$this->Randomkey();



     

        $error="";







        if($verify->count()==0 and $number->count()==0):





             

            

                        if($this->inscrire($name,$prenom,$email,$mobile) ):



                           

                            $id=\App\inscription::whereEmail($email)->first();



                            

                           

                            $authentification=\App\Authentification::create(

                                [ 

                                 "user_id"=>$id->id,

                                 "password"=>$pass ,

                                 "email"=>$id->email

                                 ]

                                );



                           

                            if($authentification):



                             

                              //Mail::to($email)

                                

                                //->send(new welcomeMail($pass,$name,$prenom));



                            


                                $req->session()->flash('status', 'Votre inscription est en cours de traitement');
                                alert()->success('Votre inscription est en cours de traitement votre mot de passe est :  '.$pass, 'Félicitation')->persistent("Close");



                                 return View('layout/validation')->with('pass',$pass)->with('email',$email);



                            else:


                                $req->session()->flash('Erreur', 'compte déja existant');

                                alert()->error('compte déja existant', 'Error')->persistent("Close");

                                return view('layout/inscription');





                            endif;





                            

                        else:

                            

                            

                            alert()->error('compte déja existant', 'Error')->persistent("Close");

                            $req->session()->flash('Erreur', 'compte déja existant');
                            

                            return View('layout.inscription')->withError($error);

                            

                        endif;



            





        else:



            

                alert()->error('compte déja existant', 'Error')->persistent("Close");

                return View('layout.inscription');





        endif;

        

        

    }


    public function inscrire($name,$prenom,$email,$mobile){


        if(  \App\inscription::create([

    

                'nom'=>$name,

                'prenom'=>$prenom,

                'email'=>$email,

                'number'=>$mobile,

                



             ])  ):





             return true;



        else:





            return false;





        endif;



       



    }







    public function Randomkey(){



         

            

            $pass=\Str::random(11);



            if(\App\authentification::wherePassword($pass)->get()->count()!=0):

         

        

                $pass=\Str::random(11);



            endif;





            return $pass;







    }
  
}
