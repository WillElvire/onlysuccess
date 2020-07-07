@extends('admin/home')
@section('container')

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                                      
                        
                        <h4 class="box-title">Les  inscriptions <span class="badge badge-primary">{{$count}}</span></h4>
                        <div class="row">
                            
                            <div class="col-lg-12 ">
                                <div class="main-card mb-3 card  ">
                                    <div class="card-body"><h5 class="card-title ">La liste des inscrits</h5>
                                    <div class="table-stats order-table ov-h">

<table class="table  table-responsive">

    <thead>

        <tr>

           

           

            <th>Nom</th>

            <th>Prénom</th>

            <th>Email</th>

            <th class="serial">Télephone</th>

            <th>action</th>

            



           

            

          

        </tr>

    </thead>

    <tbody>

        @foreach( $all as $index)

        <tr>

            <td class="serial"><a  href="/admin/profil/{{$index->id}}" > {{$index->nom ?? ''}} </a></td>

            <td class="">

              <a  href="/admin/profil/{{$index->id}}" > {{$index->prenom ?? ''}} </a>

            </td>

            

            <td> <a href="mailTo:{{$index->email ?? ''}}">{{$index->email ?? ''}}</a>  </td>

            <td><a href="tel:{{$index->number}}">{{$index->number ?? ''}}</a></td>

          

            <td>

              

              <form method="post" action="/admin/demande/{{$index->id}}">

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

{{$all->links()}}
                                    </div>
                                </div>
                            </div>
                           
                      </div>
        </div>
    </div>

@stop