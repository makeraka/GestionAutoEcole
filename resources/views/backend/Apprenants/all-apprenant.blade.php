@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

    <section class="contente">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tous les utilisateurs</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Sexe</th>
                                        <th>Date Naissance</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Type permis</th>
                                        <th>etat</th>
                                        <th>Utilisateur</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                    <tbody>
                                        @foreach ($apprenants as $key=>$row) 
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$row->nom}} </td>
                                            <td>{{$row->prenom}} </td>
                                            <td>{{$row->sexe}} </td>
                                            <td>{{$row->date}} </td>
                                            <td>{{$row->tel}} </td>
                                            <td>{{$row->adresse}} </td>
                                            <td>{{$row->permis}} </td>
                                            <td>{{$row->etat}} </td>
                                            <td>{{$row->user->name}} </td>
                                            
                    
                                            <td>
                                                
                                                <a href="{{url('/edit-apprenant')}}/{{$row->id}}" class="btn btn-success text-white fw-bold" style="width: 50% ; margin-left: 5px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="{{url('/delete-apprenant')}}/{{$row->id}}" class="btn btn-danger text-white fw-bold" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>       
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Sexe</th>
                                        <th>Date Naissance</th>
                                        <th>Téléphone</th>
                                        <th>Adresse</th>
                                        <th>Type Permis</th>
                                        <th>etat</th>
                                        <th>Utilisateur</th>
                                        <th>Action</th>
                                    </tfoot>
                            </table>
                            <a href="{{route('AddApprenant')}}" class="btn btn-primary">Ajouter Apprenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function confirmation(ev)
            {
                ev.preventDefault();
                var urlToRedirect = ev.currentTarget.getAtribute('href');
                console.log(urlToRedirect);
                swal
                ({
                    title:"Are you sure to delete this",
                    text:"You won't be able to revert this delete",
                    icon:"warning",
                    buttons : true,
                    dangerMode:true,

                })

                .then((willCancel)=>
                {
                    if(willCancel){
                        window.location.href=urlToRedirect;
                    }
                });
            }
        </script>

    </section>

</div>

@endsection