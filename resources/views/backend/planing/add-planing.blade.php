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
                        <h5 class="card-title">Ajouter un Planing</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('InsertPlaning')}} " method="POST">
                            @csrf
                            <div class="form-group-row">
                            <label for="jour" class="col-sm-2 col-form-label">Jour</label>
                            <div class="col-sm-10">
                                <select name="jour" class="form-control" id="Example">
                                    <option value="">Jour </option>
                                    <option value="Lundi">Lundi</option>
                                    <option value="Mardi">Mardi</option>
                                    <option value="Mercredi">Mercredi</option>
                                    <option value="Jeudi">Jeudi</option>
                                    <option value="Vendredi">Vendredi</option>
                                    <option value="Samedi">Samedi</option>
                                    <option value="Dimaznche">Dimanche</option> 
                                </select>
                            </div>
                        </div> 


                            <div class="form-group-row">
                                <label for="cours" class="col-sm-2 col-form-label">Type Cours</label>
                                <div class="col-sm-10">
                                    <select name="cours" class="form-control" id="Example">
                                        <option value="">Type Cours </option>
                                        <option value="Theorie">Théorie</option>
                                        <option value="Pratique">Pratique</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="form-group-row">
                                <label for="heureDebut" class="col-sm-2 col-form-label">Heure Debut</label>
                                <div class="col-sm-10">
                                    <input type="Number" class="form-control" name="heureDebut" placeholder="Entrer heureDebut" required>
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="heureFin" class="col-sm-2 col-form-label">Heure Fin</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="heureFin" placeholder="Entrer heureFin" required>
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="moniteur_id" class="col-sm-2 col-form-label">Moniteur</label>
                                <div class="col-sm-10">
                                    <select name="moniteur_id" class="form-control" id="Example">
                                        <option value="">Nom d'apprenant</option>
                                        @foreach ($moniteurs as $moniteur)
                                            <option value="{{$moniteur->id}}">{{ $moniteur->prenom }} {{ $moniteur->nom }}</option>  
                                        @endforeach 
                                    </select>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="etat" class="col-sm-2 col-form-label">Etat</label>
                                <div class="col-sm-10">
                                    <select name="etat" class="form-control" id="Example">
                                        <option value="">Etat </option>
                                        <option value="Actif">Actif</option>
                                        <option value="Inactif">Inactif</option>
                                    </select>
                                </div>
                            </div> 

                        </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">AJOUTER</button>

                                <a href="/all-payement" class="btn btn-danger">Liste Planing</a>

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