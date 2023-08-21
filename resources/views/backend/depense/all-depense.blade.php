@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Toutes les depenses</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Libellé</th>
                                        <th>A qui</th>
                                        <th>Montant </th>
                                        <th>Date </th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($depenses as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->typedepense}} </td>
                                            <td>{{$row->libelle}} </td>
                                            <td>{{$row->aqui}} </td>
                                            <td>{{$row->montant}}.FG</td>
                                            <td>{{$row->date}} </td>
                                            <td>{{$row->description}} </td>

                                            <td>
                                                
                                                <a href="/edit-depense/{{$row->id}}" class="btn btn-success text-white fw-bold"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-depense/{{$row->id}}" class="btn btn-danger text-white fw-bold"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Type de Depense</th>
                                        <th>Libellé</th>
                                        <th>A qui</th>
                                        <th>Montant </th>
                                        <th>Date </th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddDepense')}}" class="btn btn-primary">Ajouter Depense</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection