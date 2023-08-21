@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tous les cours Theoriesues</h3>
                            
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Séance</th>
                                        <th>Moniteur</th>
                                        <th>Date Examen</th>
                                        <th>Heure Debut</th>
                                        <th>Heure fin</th>
                                        <th>Vehicule</th>
                                        <th>Apprenant</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($Courspratiques as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->seance_id}} </td>
                                            <td>{{$row->moniteur->nom}} {{$row->moniteur->prenom}} </td>
                                            <td>{{$row->dateCour}}</td>
                                            <td>{{$row->heureDebut}} H </td>
                                            <td>{{$row->heureFin}} H </td>
                                            <td>{{$row->vehicule->imatricule}} </td>
                                            <td>{{$row->apprenant->prenom}} {{$row->Apprenant->nom}}</td>

                                            <td>
                                                
                                                <a href="/edit-pratique/{{$row->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-pratique/{{$row->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Séance</th>
                                        <th>Moniteur</th>
                                        <th>Date Examen</th>
                                        <th>Heure Debut</th>
                                        <th>Heure fin</th>
                                        <th>Vehicule</th>
                                        <th>Apprenant</th>
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddPratique')}}" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection