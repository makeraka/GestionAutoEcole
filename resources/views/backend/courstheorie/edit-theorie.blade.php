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
                        <h5 class="card-title">Modifier Cours</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdateTheorie')}} " method="POST">
                            @csrf
                            
                            <div class="form-group-row">
                                <label for="id" class="col-sm-2 col-form-label">Id </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id"  value="{{$Courstheories->id}}">
                                </div>

                            </div>


                            

                             <div class="form-group-row">
                                <label for="theorie_id" class="col-sm-2 col-form-label">Nom Cours</label>
                                <div class="col-sm-10">
                                    <select name="theorie_id" class="form-control">
                                        <option value="">choisir un Cours Theorique</option>
                                        @foreach ($theories as $theorie)
                                        <option value="{{$theorie->id}}">{{ $theorie->nom }} </option>  
                                        @endforeach 
                                    </select>
                                </div>
                                

                            </div>

                            <div class="form-group-row">
                                <label for="moniteur_id" class="col-sm-2 col-form-label">Nom Moniteur</label>
                                <div class="col-sm-10">
                                    <select name="moniteur_id" class="form-control">
                                        <option value="">choisir un moniteur</option>
                                        @foreach ($moniteurs as $moniteur)
                                            <option value="{{$moniteur->id}}">{{ $moniteur->prenom }} {{ $moniteur->nom }} </option>  
                                        @endforeach 
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-group-row">
                                <label for="dateCour" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="dateCour" placeholder="Entrer date du cours" value="{{$Courstheories->dateCour}}">
                                </div>

                            </div>


                            <div class="form-group-row">
                                <label for="heureDebut" class="col-sm-2 col-form-label">Heure Debut</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="heureDebut" placeholder="Entrer L'heure "  value="{{$Courstheories->heureDebut}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="heureFin" class="col-sm-2 col-form-label">Heure Fin</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="heureFin" placeholder="Entrer L'heure "  value="{{$Courstheories->heureFin}}">
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