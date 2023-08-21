@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tous les Employe du temps</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>jour</th>
                                        <th>cours</th>
                                        <th>HeureDebut</th>
                                        <th>HeureFin Payer</th>
                                        <th> Moniteur</th>
                                        <th>Etat</th>
                                       

                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($planing as $key=>$row) 
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->jour}} </td>
                                            <td>{{$row->cours}} </td>
                                            <td>{{$row->heureDebut}}H </td>
                                            <td>{{$row->heureFin}}H </td>
                                            <td> {{$row->moniteur->prenom}} {{$row->moniteur->nom}} </td>
                                            <td class="btn btn-sm btn-info">{{$row->etat}} </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <th>#</th>
                                    <th>jour</th>
                                    <th>cours</th>
                                    <th>HeureDebut</th>
                                    <th>HeureFin Payer</th>
                                    <th> Moniteur</th>
                                    <th>Etat</th>
                
                                    </tfoot>
                            </table>
                            <a href="{{route('AddPlaning')}}" class="btn btn-sm btn-info">Ajouter planing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection