@extends('user/home')
@section('container')

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                                      
                        
                        
                        <div class="row">
                            
                            <div class="col-lg-12 ">
                                <div class="main-card mb-3 card  ">
                                    <div class="card-body"><h5 class="card-title ">Historique d'investissements</h5>
                                        <table class="mb-0 table table-hover table-responsive">
                                            <thead >
                                            <tr>
                                                <th >Pack</th>
                                                <th>Montant</th>
                                                <th>Durée</th>
                                                
                                                <th>Montant à recevoir</th>
                                                <th>Jours de souscription</th>
                                                <th>Jours de paye</th>
                                                
                                                <th>Action</th>
                                                
                                               
                                            </tr>
                                            </thead>
                                            <tbody >
                                            <tr>
                                                
                                                <th scope="row">100.000fr</th>
                                                <th>30.000 fr =240 000 fr</th>
                                                <th scope="row">100.000fr</th>
                                                <th>30.000 fr =240 000 fr</th>
                                                <th scope="row">100.000fr</th>
                                                <th>30.000 fr =240 000 fr</th>

                                                <th> 
                                                    <form method="post" action="/user/delete/">
                                                     @csrf()
                                                     @method('DELETE')
                                                     <button  class="btn btn-danger" type="submit">supprimer</button>
                                                    </form>

                                                </th>
                                                <th>
                                                     <a>*</a>
                                                </th>
                                            </tr>
                                            
                                           

                                           

                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                           
                      </div>
        </div>
    </div>

@stop