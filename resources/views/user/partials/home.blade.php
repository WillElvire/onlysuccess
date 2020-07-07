@extends('user/home')
@section('container')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/form/vendor/jquery/jquery.min.js"></script>
<div class="app-main__outer">
                    <div class="app-main__inner">

                    <div class="alert alert-danger">
                        <p>
                            Cliquer ici pour faire votre investissement <br>
                            <a href="/user/investissement/{{$profil->id}}" class="btn btn-danger"> cliquer ici maintenant</a>
                    </p>
                  </div>
                                    <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Investissement</div>
                                            <div class="widget-subheading">Investissement en cours </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>{{$invest->count()}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Montant</div>
                                            <div class="widget-subheading">Montant à recevoir</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">{{$invest->sum('received')}}<span>XOF </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Montant</div>
                                            <div class="widget-subheading">Montant à payer</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">{{$invest->sum('montant')}}<span>XOF </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-12 col-lg-12">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                            Informations personnelle
                                        </div>

                                     











                                        
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="tab-eg-55">
                                            <div class="widget-chart p-3">
                                                <div style="height: 400px">

                                                <h6> Identifiant : {{$profil->id}}</h6>

<br>

<h6> Nom :{{$profil->nom}}</h6>

<br>

<h6> Prénom : {{$profil->prenom}}</h6>

<br>

<h6> Email : {{$profil->email}}</h6>

<br>

<h6> Numero de télephone : {{$profil->number}}</h6>

<br>

<h6> Mot de passe : {{$information->password}}</h6>



<br>



<h6> status :En ligne </h6>



<br>





<a class="btn btn-primary col-md-6" href="#"  data-toggle="modal" data-target="#exampleModal">Modifier mes informations</a>
                                                   
                                                </div>
                                                
                                            </div>
                                           
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                                    
                                   
                        
</div>
                            
                            
                        </div>
                    </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
        
           @csrf()
           <label>Mot de passe</label>
           <input type="password" name="mdp" class="form-control">
           <label>Ancien mot de passe : <b>{{$information->password}}</b></label>
           
          
        

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >changer de mot de passe</button>
        
      </div>

      </form>
    </div>
  </div>
</div>
@include('sweet::alert')
@stop