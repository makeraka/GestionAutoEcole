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
                        <h5 class="card-title">Modifier un Moniteur</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdateMoniteur')}} " method="POST">
                            @csrf

                            
                            <div class="form-group-row">
                                <label for="id" class="col-sm-2 col-form-label">Id </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id" placeholder="Entrer votre nom "  value="{{$moniteurs->id}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="nom" class="col-sm-2 col-form-label">Nom </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom "  value="{{$moniteurs->nom}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                                <div class="col-sm-10">
                                    <input type="prenom" class="form-control" name="prenom" placeholder="Entrer votre Prénom" value="{{$moniteurs->prenom}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
                                <div class="col-sm-10">
                                <select name="sexe" class="form-control" placeholder="Entrer votre Adresse" value="{{$moniteurs->sexe}}">
                                        <option value="">Genre</option>
                                        <option value="Feminin">Feminin</option>
                                        <option value="Masculin">Masculin</option>
                                    </select> 
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="adresse" placeholder="Entrer votre Adresse" value="{{$moniteurs->adresse}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="poste" class="col-sm-2 col-form-label">Poste</label>
                                <div class="col-sm-10">
                                <select name="poste" class="form-control" placeholder="Entrer votre Adresse" value="{{$moniteurs->poste}}" >
                                        <option value="">Choisir poste</option>
                                        <option value="Code">Code</option>
                                        <option value="Conduite">Conduite</option>
                                    </select> 
                                </div>

                            </div>


                            <div class="form-group-row">
                                <label for="tel" class="col-sm-2 col-form-label">Téléphone</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="tel" placeholder="Entrer votre contact" value="{{$moniteurs->tel}}">
                                </div>

                            </div>
                           
                        </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">MODIFIER</button>
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