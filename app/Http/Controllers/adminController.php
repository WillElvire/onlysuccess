<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use UxWeb\SweetAlert\SweetAlert;

use Carbon\Traits\Date;

class adminController extends Controller

{

    //



    public function index(){







    }





    public function register(Request $request){





      if(\Session::has('ident')):



           return redirect('/admin/home');







      else:



        $email=$request->input('email');

        $mdp=$request->input('mdp');



        $verify=\App\administrateur::whereEmailAndPassword($email,$mdp)->first();



        if($verify==null):



        

            alert()->error('Email ou mot de passe incorect', 'Erreur lors de votre authentification')->persistent("Close");

             return redirect('/admin/connection');



        else:



            if($verify->count()==1):



               



                \Session::put('ident',$verify->id);





                



             



                alert()->success('Connection Etablie avec succès', 'Bienvenue sur votre back office')->persistent("Close");

                return $this->returnView('home');



            endif;





        endif;



    endif;



           

    }







    public function admin(){







              

        if(\Session::has('ident')):



            $inscription=\App\inscription::whereStatus('0')->paginate(20);

      

             $total=\App\inscription::get()->count();

          

            $all=\App\inscription::whereStatus('1')->get();





            return $this->returnView('home')->withAll($all)->withTotal($total);



        else:



           

            alert()->error('Veuillez vous reconnecter')->persistent("Close");

            return redirect('/admin/connection');



        endif;





    }







    public function demande(){





            



            return $this->returnView('demande');

        

    }





    public function inscription(){





        



        $all=\App\inscription::whereStatus('1')->orderBy('id','desc')->paginate(20);



        return $this->returnView('inscrits');





    }





    public function confirm($id){











             return $this->returnView('confirm')->withId($id);









    }



    public function payement(){









       $payment=\App\investissement::wherePayday(Date('y/m/d'))->leftJoin( 'inscriptions','inscriptions.id', '=', 'investissements.user_id')->paginate('10');



      return $this->returnView('paiement')->withPayement($payment);



         





    }





    public function search(){





      



        $pay=\App\investissement::wherePayday(Date('y/m/d'))->get();









        



       

        



        return $this->returnView('recherche')->withPay($pay);





        

    }





    public function seacher(Request $req){





        $search=$req->input('search');





        $user = \App\inscription::where('id','LIKE','%'.$search.'%')

           ->orWhere('nom','LIKE','%'.$search.'%')

           ->orWhere('email','LIKE','%'.$search.'%')

           ->orWhere('number','LIKE','%'.$search.'%')

           ->orWhere('prenom','LIKE','%'.$search.'%')

           ->paginate('10');



        return $this->returnView('recherche')->withUser($user)->withSearch($search);







    }







    public function profil($id){







        $invest=\App\investissement::whereUser_id($id)->orderBy('id','desc')->paginate(20);



        $inscrit=\App\inscription::whereId($id)->first();





        



       

        $countable=\App\investissement::whereUser_id($id)->get()->count();



        return $this->returnView('profil')->withInscrit($inscrit)->withInvest($invest)->withCountable($countable);





    }





    public function returnView($string){





        $inscription=\App\inscription::whereStatus('0')->orderBy('id', 'desc')->paginate(10);



        $total=\App\inscription::get()->count();



        $pay=\App\investissement::wherePayday(Date('y/m/d'))->get();



        $invest=\App\investissement::whereCreatedAt(Date('y/m/d'))->get();



        $all=\App\inscription::orderBy('id','desc')->paginate(10);

      

        

        



       





        return View('admin/partials/'.$string,compact('inscription'),compact('all'))->withCount($total)->withPay($pay);





    }



    public function inscriptionPost(Request $request){





        $confirm= $request->input('confirm');



        \App\inscription::whereId($confirm)->update([



            'status'=>'1'

        ]);





        alert()->success('Compte confirmé ', 'Succès')->persistent("Close");



        return redirect('/admin/demande');

         



    }



    





    public function delete($id){



         

      

      $delete=\App\inscription::find($id);

 

      $delete2=\App\authentification::whereEmail($delete->email)->delete();



      $delete->delete();

      

     

      return redirect('/admin/inscrits');

        





    }





}

