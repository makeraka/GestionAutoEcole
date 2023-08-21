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
                        <h5 class="card-title">Ajouter Examen</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('InsertPratique')}} " method="POST">
                            @csrf
                        
                            <div class="form-group-row">
                                <label for="seance" class="col-sm-2 col-form-label">Séance</label>
                                <div class="col-sm-10">
                                    <select name="seance_id" class="form-control" id="Example">
                                        <option value="">choisir</option>
                                        @foreach ($seances as $seance)
                                            <option value="{{$seance->id}}">{{ $seance->nom }} </option>  
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
                                    <input type="date" class="form-control" name="dateCour" placeholder="Entrer date Examen" required>
                                </div>

                            </div>


                            <div class="form-group-row">
                                <label for="heureDebut" class="col-sm-2 col-form-label">Heure Debut</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="heureDebut" placeholder="Debut" required>
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="heureFin" class="col-sm-2 col-form-label">Heure Fin</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="heureFin" placeholder="Fin" required>
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
                                <label for="apprenant_id" class="col-sm-2 col-form-label">Apprenant</label>
                                <div class="col-sm-10">
                                    <select name="apprenant_id" class="form-control">
                                        <option value="">choisir</option>
                                        @foreach ($apprenants as $apprenant)
                                        
                                        <option value="{{$apprenant->id}}">{{ $apprenant->prenom }} {{ $apprenant->nom }} </option>  
                                        @endforeach 
                                    </select> 
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">AJOUTER</button>
                                <a href="{{route('AllPratique')}}" class="btn btn-primary">Liste Cours</a>
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