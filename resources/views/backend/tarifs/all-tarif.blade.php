@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Toutes les Tarifs</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <!-- <th>Images</th> -->
                                        <th>Catégorie Permis</th>
                                        <th>Type de Cours </th>
                                        <th>Montant </th>
                                        <th>Description</th>
                                        <th>Tarifier</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($tarifs as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <!-- <td> <img src="{{ asset("$row->avatar") }}" alt="" style="width: 70px; height: 70px;"> </td> -->
                                            <td>{{$row->permis}} </td>
                                            <td>{{$row->type}} </td>
                                            <td>{{$row->montant}}.FG</td>
                                            <td>{{$row->description}} </td>
                                            <td>{{$row->tarifier}} </td>

                                            <td>
                                                
                                                <a href="/edit-tarif/{{$row->id}}" class="btn btn-success text-white fw-bold"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-tarif/{{$row->id}}" class="btn btn-danger text-white fw-bold"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Catégorie Permis</th>
                                        <th>Type de Cours </th>
                                        <th>Montant </th>
                                        <th>Description</th>
                                        <th>Tarifier</th>                                        
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddTarif')}}" class="btn btn-primary">Ajouter Tarif</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection