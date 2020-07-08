@extends('user/home')
@section('container')

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                                      
                        
                        <h4 class="box-title row justify-content-center">Historiques d'investissements   <span class="badge badge-danger">{{$historique->count() ?? 0}}</span> </h4>
                        <div class="card-body">



@if($historique->count()!=0)

    <div class="table-stats order-table table-responsive" style="width:auto !important">


        <table class="table" style="width:auto !important">

            <thead>

                <tr>

                   

                    

                    <th>Pack</th>

                    <th>Montant</th>

                    <th>Durée</th>

                    <th >Jours de demande</th>

                    <th >jour de paye</th>

                    <th>Montant à recevoir</th>

                    <th>Action</th>

                   

                  

                </tr>

            </thead>

            <tbody>

               @foreach($historique as $index)

                <tr>

                   

                    <td >

                        {{$index->pack}}

                    </td>

                    <td> {{$index->montant}}  XOF</td>

                    <td>  <span >{{$index->duree}} @if($index->pack=='silver')</span> heure(s)</td>@else @if($index->pack=='golden') </span> semaine(s)</td> @else  </span> jours(s)</td> @endif @endif

                    <td> <span >{{$index->created_at}}</span> </td>

                    <td><span >{{$index->payDay}}</span></td>



                     <td>{{$index->received}} XOF</td>

                  

                     <td>

                         <form method="post" action="/user/historique/{{$index->id}}">

                           

                             @csrf()

                             @method('DELETE')

                             <button type="submit" class="btn btn-danger">

                                 <span class="fa fa-trash"></span>

                             </button>



                         </form>

                     </td>

                    

                </tr>



                @endforeach



               

                

            </tbody>

        </table>



         

    @else





        <div class="alert alert-primary">



            Aucun historique trouvé



        </div>





    @endif

    </div> <!-- /.table-stats -->

</div>

</div> <!-- /.card -->





{{$historique->links()}}







</div>
        </div>
    </div>

@stop