@extends('admin/home')
@section('container')
<div class="app-main__outer">
                    <div class="app-main__inner">

                    <p>{{\Carbon\Carbon::now()}}</p>
                    <div class="container">



<h3> {{$inscrit->nom ?? ''}} {{ $inscrit->prenom ?? '' }}</h3>



<br>



<div class="card">



    <div class="card-header">

    

        <h4>Informations personnelle</h4>

       

    </div>



   <div class="card-body">

   

        <p>Téléphone:  <a href="tel:{{$inscrit->number}}">{{$inscrit->number ?? '' }}</a></p>

        <p>Email : <a href="mailTo:{{$inscrit->email}}">{{$inscrit->email ?? '' }}</a></p>

   

   </div>



</div>





<h3>Investissement (s) <span class="badge badge-primary">{{$invest->count()}}</span></h3>





<div class="orders">

        <div class="row">

            <div class="col-xl-12">



              <br>

              <br>

                <div class="card">

                   

                    <div class="card-body--">

                        <div class="table-stats order-table ov-h table-responsive">

                            <table class="table ">

                                <thead>

                                    <tr>

                                       

                                       

                                        <th>Pack</th>

                                        <th>Montant</th>

                                        <th>duree</th>

                                        <th >Jour d'incription</th>

                                        

                                        <th >Jour de payement</th>



                                        <th>Montant à recevoir</th>



                                       

                                      

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach( $invest as $index)

                                    <tr>

                                        <td > {{$index->pack ?? ''}}</td>

                                        <td >

                                                 {{$index->montant ?? ''}}  XOF

                                        </td>



                                        

                                        <td>

                                           

                                             {{$index->duree  ?? ''}}  jours



                                        </td>

                                        

                                        <td>  <span class="name"></span> {{$index->created_at}} </td>



                                       

                                       



    

                                            <td>

                                                <span>{{$index->payDay}} </span>

                                                

                                            </td>





                                            <td>

                                                <span>{{$index->received}}  XOF </span>

                                                

                                            </td>





                                            

                                                                            

                                    </tr>



                                    @endforeach





                                    

                                    

                                </tbody>

                            </table>

                        </div> <!-- /.table-stats -->

                    </div>



                    

                </div> <!-- /.card -->

                {{$invest->links()}}



            </div>  <!-- /.col-lg-8 -->

                   </div>

</div>
@stop