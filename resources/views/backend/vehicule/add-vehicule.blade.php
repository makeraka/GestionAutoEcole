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
                        <h5 class="card-title">Ajouter un Vehicule</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('InsertVehicule')}} " method="POST">
                            @csrf
                            <div class="form-group-row">
                                <label for="type" class="col-sm-2 col-form-label">Type </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type" placeholder="Entrer type voiture" required>
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="modele" class="col-sm-2 col-form-label">Modele</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="modele" placeholder="Entrer le modele" required>
                                </div>

                            </div>

                            
                            <div class="form-group-row">
                                <label for="marque" class="col-sm-2 col-form-label">Marque</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="marque" placeholder="Entrer la marque" required>
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="imatricule" class="col-sm-2 col-form-label">Imatriculation</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="imatricule" placeholder="Entrer votre Imatricule" required>
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="etat" class="col-sm-2 col-form-label">Etat Permis</label>
                                <div class="col-sm-10">
                                    <select name="etat" class="form-control" id="Example">
                                        <option value="">Etat</option>
                                        <option value="En service">En service</option>
                                        <option value="Hors Service">Hors Service</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">AJOUTER</button>
                                <a href="{{route('AllVehicule')}}" class="btn btn-primary">Liste Vehicules</a>
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