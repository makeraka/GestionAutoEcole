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
                        <h5 class="card-title">Modifier un Vehicule</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdateVehicule')}} " method="POST">
                            @csrf

                            <div class="form-group-row">
                                <label for="id" class="col-sm-2 col-form-label">Id </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id" placeholder="Entrer type voiture" value="{{$vehicules->id}}">
                                </div>

                            </div>


                            <div class="form-group-row">
                                <label for="type" class="col-sm-2 col-form-label">Type </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type" placeholder="Entrer type voiture" value="{{$vehicules->type}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="modele" class="col-sm-2 col-form-label">Modele</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="modele" placeholder="Entrer le modele" value="{{$vehicules->modele}}">
                                </div>

                            </div>

                            
                            <div class="form-group-row">
                                <label for="marque" class="col-sm-2 col-form-label">Marque</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="marque" placeholder="Entrer la marque" value="{{$vehicules->marque}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="imatricule" class="col-sm-2 col-form-label">Imatriculation</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="imatricule" placeholder="Entrer votre Imatricule" value="{{$vehicules->imatricule}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="etat" class="col-sm-2 col-form-label">Etat Permis</label>
                                <div class="col-sm-10">
                                    <select name="etat" class="form-control"  value="{{$vehicules->etat}}" >
                                        <option value="">Etat</option>
                                        <option value="En service">En service</option>
                                        <option value="Hors Service">Hors Service</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modifier</button>
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