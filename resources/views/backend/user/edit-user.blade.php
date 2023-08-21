@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-1">

            </div>

            <div class="col-lg-10">
                <div class="card">  <!--card start-->

                    <div class="card-header">
                        <h5 class="card-title">Ajouter un utilisateur</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdateUser')}} " method="POST">
                            @csrf
                            
                            <input type="text" class="form-control" name="id"  value="{{$user->id}}">
                            <div class="form-group-row">
                                <label for="name" class="col-sm-2 col-form-label">Nom d'Utilsateur</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Entrer votre nom d'utilisateur" value="{{$user->name}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="email" class="col-sm-2 col-form-label">Adresse Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Entrer votre email"  value="{{$user->email}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="name" class="col-sm-2 col-form-label">Mot de Passe</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe"  value="{{$user->password}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="name" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select name="role" id="ExampleFormControlSelect1" class="form-control" required>
                                        <option value="Admin" {{'Admin'==$user->role ? 'selected' :''}}>Admin</option>
                                        <option value="Utilisateur" {{'Utilisateur'==$user->role ? 'selected' :''}}>Utilisateur</option>
                                        <option value="Employe" {{'Employe'==$user->role ? 'selected' :''}}>Employe</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info text-white fw-bold">MODIFIER</button>
                            </div>

                        </form>
                    </div>
                </div><!--card end-->
            </div>

            <div class="col-lg-1">
                
            </div>
        </div>
    </section>
</div>

@endsection