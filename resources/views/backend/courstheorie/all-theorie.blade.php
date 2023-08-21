@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tous les cours Theoriques</h3>
                            
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <<th>#</th>
                                        <th>Cous theorique</th>
                                        <th>Moniteur</th>
                                        <th>Date de Cours</th>
                                        <th>Heure Debut </th>
                                        <th>Heure fin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($Courstheories as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->theorie->nom}} </td>
                                            <td>{{$row->moniteur->nom}} {{$row->moniteur->prenom}} </td>
                                            <td>{{$row->dateCour}}</td>
                                            <td>{{$row->heureDebut}} H </td>
                                            <td>{{$row->heureFin}} H</td>

                                            <td>
                                                
                                                <a href="/edit-theorie/{{$row->id}}" class="btn btn-sm btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-theorie/{{$row->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Cous theorique</th>
                                        <th>Moniteur</th>
                                        <th>Date de Cours</th>
                                        <th>Heure Debut</th>
                                        <th>Heure fin</th>
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddTheorie')}}" class="btn btn-primary">Ajouter Cours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection