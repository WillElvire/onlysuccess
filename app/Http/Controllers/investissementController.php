<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use UxWeb\SweetAlert\SweetAlert;

use Carbon\Traits\Date;

use Illuminate\Support\Facades\Mail;

use App\Mail\investMail;

use App\Notifications\registerNotification;

class investissementController extends Controller

{

    //

  

    public function delete($id){

      

        $delete=\App\investissement::find($id)->delete();

       
        return redirect('/user/historique/'.\Session::get('id'));

       

    }



    public function register(Request $request,$id){





        $duree=$request->input('duree');

        $pack=$request->input('pack');

        $montant=$request->input('montant');





        $auth=\App\inscription::find($id)->first();



       

       

        if($pack=="silver"):

                $payday=new \DateTime(" +$duree  hours");


        else:
                if($pack=="golden"):


                        $payday=new \DateTime(" +$duree  weeks");
                
                else:


                        $payday=new \DateTime(" +$duree  days");

                
                endif;


        endif;

        if($pack=="golden"){


                if($montant==200000 and $duree!=3 ):

                        alert()->error("l'offre que vous tentez de choisir n'existe pas dans notre plan d'investissement","fatal error")->persistent("Close");;
                        return redirect('/user/investissement/'.$id);

                else:

                        if($montant==300000 and $duree!=4):

                                alert()->error("l'offre que vous tentez de choisir n'existe pas dans notre plan d'investissement","fatal error")->persistent("Close");;
                                return redirect('/user/investissement/'.$id);

                        else:

                            if($montant==500000 and $duree!=5):

                                alert()->error("l'offre que vous tentez de choisir n'existe pas dans notre plan d'investissement","fatal error")->persistent("Close");;
                                return redirect('/user/investissement/'.$id);

                            else:
                                 
                                 if($montant==1000000 and $duree!=7):

                                        alert()->error("l'offre que vous tentez de choisir n'existe pas dans notre plan d'investissement","fatal error")->persistent("Close");;
                                        return redirect('/user/investissement/'.$id);
                                
                                 endif;
                        
                            endif;

                        endif;
                endif;

                            


        }

        

        if( \App\investissement::create([



              "user_id"=>$id,

              "pack"=>$pack,

              "montant"=>$montant,

              "duree"=>$duree,

              "payDay"=>$payday,

              "received"=>$this->getMontant($pack,$montant,$duree),

              

         ])  ):







         //$admin=\App\administrateur::first();

        //$admin->notify(new registerNotification );

      

         //Mail::to($auth->email)

           

           //->send(new investMail($pack,$montant,$duree)); 

 

         

        



         alert()->success('

             Votre Souscription au pack '.$pack.' est en cours de traitement  
             veuillez contacter le service client afin de faire la transaction de la somme de :   '.$montant.'  XOF 
             les numéros sont les suivants  :
             +22570104792/+22558726750
         ','confirmation d\'investissement')->persistent("Close");



         return redirect('/user/home/'.$id);





        else:





         return redirect('/user/investissement/'.$id);





        endif;



    }





    public function getMontant($pack,$montant,$duree){


       


        $receved=0;


        if($pack=="silver"){


                if($duree==6):


                        $receved=$montant+15000;
                
                else:


                   if($duree==12):


                        $receved=$montant+30000;

                   else:

                         if($duree==24):


                                $receved=$montant+50000;


                         endif;



                   endif;


                endif;


        }


        if($pack=="diamond"){


                $receved=$montant*2;
        }


        if($pack=="golden"){

                if($montant==200000){

                        $receved=600000;
                }

                if($montant==300000){

                        $receved=960000;
                }

                if($montant==500000){

                        $receved=1400000;
                }

                if($montant==1000000){

                        $receved=2800000;
                }


        }



        if($pack=="access" and $montant=="50000" and $duree==7):

               $receved="60000";

        else:



                if($pack=="access" and $montant=="50000" and $duree==15):



                        $receved="75000";



                else:





                        if($pack=="access" and $montant=="50000" and $duree==30):



                            $receved="90000";



                        endif;



                endif;



        endif;







        if($pack=="access" and $montant=="100000" and $duree==7):

            $receved="115000";

        else:



             if($pack=="access" and $montant=="100000" and $duree==15):



                     $receved="140000";



             else:





                     if($pack=="access" and $montant=="100000" and $duree==30):



                         $receved="185000";



                     endif;



             endif;



        endif;





        if($pack=="access" and $montant=="150000" and $duree==7):

            $receved="170000";

        else:



             if($pack=="access" and $montant=="150000" and $duree==15):



                     $receved="200000";



             else:





                     if($pack=="access" and $montant=="150000" and $duree==30):



                         $receved="250000";



                     endif;



             endif;



        endif;





        if($pack=="Bronze" and $montant=="200000" and $duree==7):

            $receved="250000";

        else:



             if($pack=="Bronze" and $montant=="200000" and $duree==15):



                     $receved="300000";



             else:





                     if($pack=="Bronze" and $montant=="200000" and $duree==30):



                         $receved="400000";



                     endif;



             endif;



        endif;



































        if($pack=="evasion" and $montant=="200000" and $duree==12):

            $receved="240000";

     else:



             if($pack=="evasion" and $montant=="200000" and $duree==24):



                     $receved="290000";



             else:





                     if($pack=="evasion" and $montant=="200000" and $duree==31):



                         $receved="340000";



                     endif;



             endif;



     endif;







     if($pack=="evasion" and $montant=="500000" and $duree==12):

         $receved="600000";

     else:



          if($pack=="evasion" and $montant=="500000" and $duree==24):



                  $receved="760000";



          else:





                  if($pack=="evasion" and $montant=="500000" and $duree==31):



                      $receved="950000";



                  endif;




                  



          endif;



     endif;





     if($pack=="evasion" and $montant=="250000" and $duree==12):

         $receved="300000";

     else:



          if($pack=="evasion" and $montant=="250000" and $duree==24):



                  $receved="380000";



          else:





                  if($pack=="evasion" and $montant=="250000" and $duree==31):



                      $receved="480000";



                  endif;



          endif;



     endif;





     if($pack=="evasion" and $montant=="750000" and $duree==12):

         $receved="830000";

     else:



          if($pack=="evasion" and $montant=="750000" and $duree==24):



                  $receved="980000";



          else:





                  if($pack=="evasion" and $montant=="750000" and $duree==31):



                      $receved="1200000";



                  endif;



          endif;



     endif;



















     if($pack=="Argent" and $montant=="300000" and $duree==7):

        $receved="400000";

 else:



         if($pack=="Argent" and $montant=="300000" and $duree==15):



                 $receved="500000";



         else:





                 if($pack=="Argent" and $montant=="300000" and $duree==30):



                     $receved="600000";



                 endif;



         endif;



 endif;







 if($pack=="Argent" and $montant=="500000" and $duree==7):

     $receved="650000";

 else:



      if($pack=="Argent" and $montant=="500000" and $duree==15):



              $receved="800000";



      else:





              if($pack=="Argent" and $montant=="500000" and $duree==30):



                  $receved="950000";



              endif;



      endif;



 endif;





if($pack=="Argent" and $montant=="300000" and $duree==7):

            $receved="400000";

     else:



             if($pack=="Argent" and $montant=="300000" and $duree==15):



                     $receved="500000";



             else:





                     if($pack=="Argent" and $montant=="300000" and $duree==30):



                         $receved="600000";



                     endif;



             endif;



     endif;







     if($pack=="Argent" and $montant=="500000" and $duree==7):

         $receved="650000";

     else:



          if($pack=="Argent" and $montant=="500000" and $duree==15):



                  $receved="800000";



          else:





                  if($pack=="Argent" and $montant=="500000" and $duree==30):



                      $receved="950000";



                  endif;



          endif;



     endif;





     if($pack=="Argent" and $montant=="800000" and $duree==7):

         $receved="1000000";

     else:



          if($pack=="Argent" and $montant=="800000" and $duree==15):



                  $receved="1200000";



          else:





                  if($pack=="Argent" and $montant=="800000" and $duree==30):



                      $receved="1400000";



                  endif;



          endif;



     endif;





     if($pack=="Argent" and $montant=="1000000" and $duree==7):

         $receved="1300000";

     else:



          if($pack=="Argent" and $montant=="1000000" and $duree==15):



                  $receved="1600000";



          else:





                  if($pack=="Argent" and $montant=="1000000" and $duree==30):



                      $receved="1900000";



                  endif;



          endif;



     endif;











     if($pack=="Heure" and $montant=="300000" and $duree==3):

        $receved="540000";

     endif;



     if($pack=="Heure" and $montant=="400000" and $duree==3):

        $receved="720000";

     endif;



     if($pack=="Heure" and $montant=="500000" and $duree==3):

        $receved="900000";

     endif;



     if($pack=="Heure" and $montant=="200000" and $duree==3):

        $receved="360000";

     endif;



     if($pack=="Heure" and $montant=="100000" and $duree==3):

        $receved="180000";

     endif;



























     if($pack=="Or" and $montant=="2000000" and $duree==30):

        $receved="3000000";

 else:



         if($pack=="Or" and $montant=="2000000" and $duree==60):



                 $receved="4000000";



         else:





                 if($pack=="Or" and $montant=="2000000" and $duree==90):



                     $receved="5000000";



                 endif;



         endif;



 endif;







 if($pack=="Or" and $montant=="3000000" and $duree==30):

     $receved="4500000";

 else:



      if($pack=="Or" and $montant=="3000000" and $duree==60):



              $receved="5000000";



      else:





              if($pack=="Or" and $montant=="3000000" and $duree==90):



                  $receved="7000000";



              endif;



      endif;



 endif;





 if($pack=="Or" and $montant=="4000000" and $duree==30):

     $receved="6000000";

 else:



      if($pack=="Or" and $montant=="4000000" and $duree==60):



              $receved="8000000";



      else:





              if($pack=="Or" and $montant=="4000000" and $duree==90):



                  $receved="10000000";



              endif;



      endif;



 endif;





 if($pack=="Or" and $montant=="5000000" and $duree==30):

     $receved="7500000";

 else:



      if($pack=="Or" and $montant=="5000000" and $duree==60):



              $receved="10000000";



      else:





              if($pack=="Or" and $montant=="5000000" and $duree==90):



                  $receved="12500000";



              endif;



      endif;



 endif;















































      return $receved;



       







         



    }

}

