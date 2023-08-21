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
                        <h5 class="card-title">Modifier un Apprenant</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdateApprenant')}} " method="POST">
                            @csrf
                           
                            <div class="form-group-row">
                                <label for="id" class="col-sm-2 col-form-label">Id </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id"  value="{{$apprenant->id}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="nom" class="col-sm-2 col-form-label">Nom </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom "  value="{{$apprenant->nom}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                                <div class="col-sm-10">
                                    <input type="prenom" class="form-control" name="prenom" placeholder="Entrer votre Prénom" value="{{$apprenant->prenom}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="sexe" class="col-sm-2 col-form-label">Sexe</label>
                                <div class="col-sm-10">
                                <select name="sexe" class="form-control" id="Example">
                                        <option value="">Genre</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Homme">Homme</option>
                                    </select> 
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="date" class="col-sm-2 col-form-label">Sexe</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" placeholder="Entrer votre date de naissance" value="{{$apprenant->date}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="tel" class="col-sm-2 col-form-label">Téléphone</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="tel" placeholder="Entrer votre contact" value="{{$apprenant->tel}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="adresse" placeholder="Entrer votre Adresse" value="{{$apprenant->adresse}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                    <label for="permis" class="col-sm-2 col-form-label">Type Permis</label>
                                    <div class="col-sm-10">
                                        <select name="permis" class="form-control" id="Example" value="{{$apprenant->permis}}">
                                            <option value="">Type Permis</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="A+E">B+E</option>
                                            <option value="C">C</option>
                                            <option value="C+E">C+E</option>
                                            <option value="D">D</option>
                                            <option value="D">D</option>
                                            <option value="D+E">D+E</option>
                                        </select>
                                    </div>
                                </div> 

                            
                            </div>

                                        <div class="form-group-row">
                                            <label for="etat" class="col-sm-2 col-form-label">Etat Permis</label>
                                            <div class="col-sm-10">
                                                <select name="etat" class="form-control" id="Example" value="{{$apprenant->etat}}">
                                                    <option value="">Etat permis</option>
                                                    <option value="actif">Actif</option>
                                                    <option value="archive">Archivé</option>
                                                </select>
                                            </div>
                                        </div> 


                        </div>

                            <div class="card-footer">
                                <button type="submit"  class="btn btn-success text-white fw-bold" style="width: 20% ; margin-right: 5px;">MODIFIER</button>
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