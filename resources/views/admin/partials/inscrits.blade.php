@extends('admin/home')
@section('container')

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                                      
                        @forelse($utilisateurs as $key => $value)
                              {{}}

                        @empty      
                              {{rien}}
                        @endforelse
                        
                        <div class="row">
                            
                            <div class="col-lg-12 ">
                                <div class="main-card mb-3 card  ">
                                    <div class="card-body"><h5 class="card-title ">La liste des inscrits</h5>
                                        <table class="mb-0 table table-hover table-responsive">
                                            <thead >
                                            <tr>

                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Mail</th>              
                                                <th>Numero</th>
                        
                                            </tr>
                                            </thead>
                                            <tbody >
                                            <tr>
                                                
                                                <th scope="row">100.000fr</th>
                                                <th>30.000 fr =240 000 fr</th>
                                                <th scope="row">100.000fr</th>
                                                <th>30.000 fr =240 000 fr</th>
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