@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tous les Payements</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Categorie</th>
                                        <th>Date</th>
                                        <th>Prix</th>
                                        <th>Montant Payer</th>
                                        <th>Montant Renstant</th>
                                        <th>Appreanant</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($payements as $key=>$row) 
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->categorie}} </td>
                                            <td>{{$row->date}} </td>
                                            <td>{{$row->prix}}.FG </td>
                                            <td>{{$row->montantpaye}}.FG </td>
                                            <td>{{$row->montantrestant}}.FG </td>
                                           {{-- // <td>{{$row->apprenant_id}} </td> --}}
                                            
                                            <td> {{$row->apprenant->prenom}} {{$row->apprenant->nom}} </td>
                                
                    
                                            <td>
                                                
                                                <a href="/edit-payement/{{$row->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-payement/{{$row->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <<th>#</th>
                                        <th>Categorie</th>
                                        <th>Date</th>
                                        <th>Prix</th>
                                        <th>Montant Payer</th>
                                        <th>Montant Renstant</th>
                                        <th>Apprenant</th>
                                        <th>Action</th>
                
                                    </tfoot>
                            </table>
                            <a href="{{route('AddPayement')}}" class="btn btn-sm btn-info">Ajouter¨Payement</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection