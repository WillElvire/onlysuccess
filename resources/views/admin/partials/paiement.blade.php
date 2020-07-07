@extends('admin/home')
@section('container')
<div class="app-main__outer">
                    <div class="app-main__inner">

                    <p>{{\Carbon\Carbon::now()}}</p>
                                    <div class="row">
                            <div class="col-md-6 col-xl-6">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Payement</div>
                                            <div class="widget-subheading">Payement d'aujourd'hui </div>
                                        </div>
                                        
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>{{$pay->count()}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Payement</div>
                                            <div class="widget-subheading">Payement montant</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">{{$pay->sum('received')}}<span>XOF </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <table class="table ">

<thead>

    <tr>

       

       

        <th>Nom</th>

        <th>Prénom</th>

        <th>Email</th>

        <th class="serial">Télephone</th>

        <th> paye</th>

        <th>Pack</th>

        <th>Montant</th>

       

        

      

    </tr>

</thead>

<tbody>

    @foreach( $pay as $index)

    <tr>

        <td class="serial"> {{$index->nom ?? ''}}</td>

        <td class="">

                 {{$index->prenom ?? ''}}

        </td>

        

        <td> <a href="mailTo:{{$index->email ?? ''}}">{{$index->email ?? ''}}</a>  </td>

        <td><a href="tel:{{$index->number}}">{{$index->number ?? ''}}</a></td>

        <td>  <span class="name"></span> {{$index->payDay ?? ''}} </td>

        <td>{{$index->pack ?? ''}}</td>

        <td>{{$index->montant ?? ''}} XOF</td>



       

                           

    </tr>



    @endforeach





    

    

</tbody>

</table>
{{$payement->links()}}

                        </div>
                        
                        </div>
                        </div>

                    @stop