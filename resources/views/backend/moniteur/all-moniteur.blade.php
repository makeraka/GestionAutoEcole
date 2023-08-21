@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Toutes les Moniteurs</h3>
                            
                        </div>
                        

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Sexe</th>
                                        <th>Adresse</th>
                                        <th>Téléphone</th>
                                        <th>Poste</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($moniteurs as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->nom}} </td>
                                            <td>{{$row->prenom}} </td>
                                            <td>{{$row->sexe}} </td>
                                            <td>{{$row->adresse}}</td>
                                            <td>{{$row->tel}} </td>
                                            <td>{{$row->poste}} </td>


                                            <td>
                                                
                                                <a href="/edit-moniteur/{{$row->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-moniteur/{{$row->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Sexe</th>
                                        <th>Adresse</th>
                                        <th>Téléphone</th>
                                        <th>Poste</th>
                                        <th>Action</th>
                                    </tfoot>
                                    
                            </table>

                         
                            <a href="{{route('AddMoniteur')}}" class="btn btn-primary">Ajouter Moniteur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection