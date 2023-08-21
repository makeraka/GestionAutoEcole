@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">Tous les utilisateurs</h1>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Nom utilisateur</td>
                                        <td>Email</td>
                                        <td>Role</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($all as $key=>$row)
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->name}} </td>
                                            <td>{{$row->email}} </td>
                                            <td>{{$row->role}} </td>

                                            <td>
                                                
                                                <a href="/edit-user/{{$row->id}}" class="btn btn-success text-white fw-bold"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="/delete-user/{{$row->id}}" class="btn btn-danger text-white fw-boldr"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <td>#</td>
                                        <td>Nom utilisateur</td>
                                        <td>Email</td>
                                        <td>Role</td>
                                        <td>Action</td>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddUser')}}" class="btn btn-primary text-white fw-bold">Ajouter Utilisateur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection