@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Information sur L'auto-école</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>¨Propriétaire</th>
                                        <th>Adresse </th>
                                        <th>Ville </th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Code Auto-Ecole</th>
                                        <th>Date D'ouverture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($parametres as $key=>$row)
                                        <tr>
                                             <td>{{$key+1}} </td>
                                            <td>{{$row->nom}} </td>
                                            <td>{{$row->proprietaire}} </td>
                                            <td>{{$row->adresse}} </td>
                                            <td>{{$row->ville}}</td>
                                            <td>{{$row->email}} </td>
                                            <td>{{$row->contact}} </td>
                                            <td>{{$row->code}} </td>
                                            <td>{{$row->date}} </td>


                                            <td>
                                                
                                                <!-- <a href="/edit-parametre/{{$row->id}}" class="btn btn-success text-white fw-bold">Modifier</a> -->
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <th>#</th>
                                        <th>Nom</th>
                                        <th>¨Propriétaire</th>
                                        <th>Adresse </th>
                                        <th>Ville </th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Code Auto-Ecole</th>
                                        <th>Date D'ouverture</th>
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div  align="center">
        <img src="images/imageauto.jpeg" alt="" align="center">
        </div>

    </section>

</div>

@endsection