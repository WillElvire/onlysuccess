<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class historiqueController extends Controller

{

    //



    public function index(){





          $historique=\App\investissement::whereUser_id(\Session::get('id'))->orderBy('id','desc')->paginate(10);

          $invest=\App\investissement::whereUser_id(\Session::get('id'))->get();

   

        

          if(\Session::has('id')):



            return View('user/partials/historique',compact('historique'))->withInvest($invest);



          else:



            return redirect('/user/connection');



          endif;

          

    }

}

