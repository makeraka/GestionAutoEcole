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
                        <h5 class="card-title">Modifier Examen</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdateExamen')}} " method="POST">
                            @csrf
                            <div class="form-group-row">
                                <label for="id" class="col-sm-2 col-form-label">Id </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id" value="{{$examens->id}}">
                                </div>

                            </div>
                            <div class="form-group-row">
                                <label for="apprenant_id" class="col-sm-2 col-form-label">Apprenant</label>
                                <div class="col-sm-10">
                                    <select name="apprenant_id" class="form-control">
                                        <option value="">choisir</option>
                                        @foreach ($apprenants as $apprenant) 
                                        <option value="{{$apprenant->id}}"> {{ $apprenant->prenom }} {{ $apprenant->nom }} </option>  
                                        @endforeach 
                                    </select> 
                                </div>
                                

                            </div>

                            <div class="form-group-row">
                                <label for="moniteur_id" class="col-sm-2 col-form-label">Moniteur</label>
                                <div class="col-sm-10">
                                    <select name="moniteur_id" class="form-control">
                                        <option value="">choisir</option>
                                        @foreach ($moniteurs as $moniteur)
                                            <option value="{{$moniteur->id}}">{{ $moniteur->prenom }} {{ $moniteur->nom }} </option>  
                                        @endforeach 
                                    </select>
                                </div>
                               
                            </div>

                            <div class="form-group-row">
                                <label for="dateCour" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" placeholder="Entrer date Examen" value="{{$examens->date}}">
                                </div>

                            </div>


                            <div class="form-group-row">
                                <label for="heureDebut" class="col-sm-2 col-form-label">Heure Debut</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="heureDebut" placeholder="Debut" value="{{$examens->heureDebut}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="heureFin" class="col-sm-2 col-form-label">Heure Fin</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="heureFin" placeholder="Fin" value="{{$examens->heureFin}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="typeExamen" class="col-sm-2 col-form-label">Type Examen</label>
                                <div class="col-sm-10">
                                    <select name="typeExamen" class="form-control" id="Example" value="{{$examens->typeExamen}}">
                                        <option value="">Type</option>
                                        <option value="Theorie">Theorie</option>
                                        <option value="Pratique">Pratique</option>
                                    </select>
                                </div>
                            </div> 



                            <div class="form-group-row">
                                <label for="vehicule_id" class="col-sm-2 col-form-label">Vehicule</label>

                                <div class="col-sm-10">
                                    <select name="vehicule_id" class="form-control">
                                        <option value="">choisir</option>
                                            @foreach ($vehicules as $vehicule)
                                        <option value="{{$vehicule->id}}">{{ $vehicule->imatricule}} </option>  
                                        @endforeach 
                                    </select>

                                </div>

                                
                            </div>



                            <div class="form-group-row">
                                <label for="etat" class="col-sm-2 col-form-label">Etat</label>
                                <div class="col-sm-10">
                                    <select name="etat" class="form-control" id="Example" value="{{$examens->etat}}">
                                        <option value="">choisir</option>
                                        <option value="En cours">En cours</option>
                                        <option value="Terminer">Terminer</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="form-group-row">
                                <label for="resultat" class="col-sm-2 col-form-label">Resultat</label>
                                <div class="col-sm-10">
                                    <select name="resultat" class="form-control" id="Example" value="{{$examens->resultat}}">
                                        <option value="">Type</option>
                                        <option value="En attente">En Attente</option>
                                        <option value="Reussi">Reussi</option>
                                        <option value="Echouer">Echouer</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Modifier</button>
                                <a href="{{route('AllExamen')}}" class="btn btn-primary">Liste Examen</a>
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