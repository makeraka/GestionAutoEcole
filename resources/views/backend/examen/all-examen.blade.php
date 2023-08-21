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
                                        <th>Apprenant</th>
                                        <th>Moniteur</th>
                                        <th>Date Examen</th>
                                        <th>Heure Debut</th>
                                        <th>Heure fin</th>
                                        <th>Type Examen </th>
                                        <th>Vehicule</th> 
                                        <th>Etat</th>
                                        <th>Resultat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($examens as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->Apprenant->nom}} </td>
                                            <td>{{$row->moniteur->nom}} {{$row->moniteur->prenom}} </td>
                                            <td>{{$row->date}}</td>
                                            <td>{{$row->heureDebut}} H </td>
                                            <td>{{$row->heureFin}} H </td>
                                            <td>{{$row->typeExamen}} </td>
                                            <td>{{$row->vehicule->imatricule}} </td>
                                            <td>{{$row->etat}} </td>
                                            <td>{{$row->resultat}} </td>

                                            <td>
                                                
                                                <a href="/edit-examen/{{$row->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-examen/{{$row->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Apprenant</th>
                                        <th>Moniteur</th>
                                        <th>Date Examen</th>
                                        <th>Heure Debut</th>
                                        <th>Heure fin</th>
                                        <th>Type Examen </th>
                                        <th>Vehicule</th>
                                        <th>Etat</th>
                                        <th>Resultat</th>
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddExamen')}}" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection