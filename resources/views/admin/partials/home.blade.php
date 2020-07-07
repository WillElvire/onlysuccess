@extends('admin/home')
@section('container')
<div class="app-main__outer">
                    <div class="app-main__inner">

                    <p>{{\Carbon\Carbon::now()}}</p>
                                    <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Inscription</div>
                                            <div class="widget-subheading">Tous les inscrits </div>
                                        </div>
                                        
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>{{$total ?? ''}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Payement</div>
                                            <div class="widget-subheading">Payement des investisseurs</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">{{$pay->sum('received') ?? '0' }}<span>XOF </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">

                                    @if($pay->count()!=0)

                                        <div class="widget-content-left">
                                            <div class="widget-heading">Paiement</div>
                                            <div class="widget-subheading">Paiement d'aujourd'hui</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">{{$pay->count() ?? '0'}}</div>
                                        </div>

                                    @else
                                      
                                         <div class="widget-content-left">
                                            <div class="widget-heading">Paiement</div>
                                            <div class="widget-subheading"> Pas de paiement</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">0</div>
                                        </div>

                                    @endif
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
                                                <div style="height: 350px">
                                                   
                                                <div class="row">

<div class="col-lg-8">

        

        <div class="container">

       

            <div class="card-body">







               <div class="row">

               

               

                  <div class="col-md-6">

                  

                     <img src="{{asset('/logo2.png')}}">

                  

                  </div>



                  <div class="col-md-6">

                  

                     

                     <p>Nom:OnlySuccessIvestment</p>



                     <p>Prenom:Admin</p>



                     <p>Email:o</p>



                     <p>Password:12345</p>  

                  

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
                            
                            
                        </div>
                    </div>

@stop