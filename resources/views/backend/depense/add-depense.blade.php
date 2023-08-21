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
                        <h5 class="card-title">Ajouter une Depense</h5>
                    </div>

            <div class="card-body"><!--card body-->
                <form action="{{route('InsertDepense')}}" method="POST">
                                @csrf
           
                            <div class="form-group-row">
                                <label for="typedepense" class="col-sm-2 col-form-label">Type depense</label>
                                <div class="col-sm-10">
                                    <select name="typedepense" class="form-control" id="Example">
                                        <option value="">Type</option>
                                        <option value="Personnel">Personnel</option>
                                        <option value="Vehicule">Vehicule</option>
                                        <option value="Ecole">Ecole</option>
                                        <option value="Autre">Autre</option>

                                    </select>
                                </div>
                            </div> 

                    <div class="form-group-row">
                            <label for="libelle" class="col-sm-2 col-form-label">libellé</label>
                            <div class="col-sm-10">
                                <input type="texte" class="form-control" name="libelle" placeholder="Entrer le libellé" required>
                            </div>
                    </div>

                    <div class="form-group-row">
                        <label for="aqui" class="col-sm-2 col-form-label">A qui</label>
                        <div class="col-sm-10">
                            <input type="texte" class="form-control" name="aqui" placeholder="Entrer a qui est destiné" required>
                        </div>

                    </div>
                  
                    <div class="form-group-row">
                        <label for="montant" class="col-sm-2 col-form-label">Montant</label>
                        <div class="col-sm-10">
                            <input type="Number" class="form-control" name="montant" placeholder="Entrer le montant" required>
                        </div>

                    </div>

                    <div class="form-group-row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" placeholder="Entrer votre date de naissance" required>
                        </div>

                    </div>
                    
                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Entrer Description" id="floatingTextarea2" style="height: 100px"></textarea>
                           
                        </div>
                    </div>
                    <br>
                  
                    <button type="submit" class="btn btn-success text-white fw-bold">AJOUTER</button>
                    <br><br>
                    <a href="/all-depense/" class="btn btn-primary text-white fw-bold">Voir les Depenses</a>
                
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