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
                                        <th>Type</th>
                                        <th>Modele</th>
                                        <th>Marque</th>
                                        <th>Num Imatricule</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($vehicules as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->type}} </td>
                                            <td>{{$row->modele}} </td>
                                            <td>{{$row->marque}}</td>
                                            <td>{{$row->imatricule}} </td>
                                            <td>{{$row->etat}} </td>
                                            <td>
                                                
                                                <a href="/edit-vehicule/{{$row->id}}" class="btn btn-success text-white fw-bold"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-vehicule/{{$row->id}}" class="btn btn-danger text-white fw-bold"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Modele</th>
                                        <th>Marque</th>
                                        <th>Num Imatricule</th>
                                        <th>Etat</th>
                                        <th>Action</th>
                
                                    </tfoot>
                            </table>
                            <a href="{{route('AddVehicule')}}" class="btn btn-sm btn-info">Ajout vehicule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection