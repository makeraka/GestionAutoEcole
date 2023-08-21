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
            <form action="{{route('UpdateDepense')}}" method="POST">
              @csrf
                
              <div class="form-groupe">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control"name="id" placeholder="Entrer le type" value="{{$depense->id}}">
              </div>

              <div class="form-group-row">
                                <label for="typedepense" class="col-sm-2 col-form-label">Etat Permis</label>
                                <div class="col-sm-10">
                                    <select name="typedepense" class="form-control" id="Example" value="{{$depense->typedepense}}">
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
                                <input type="texte" class="form-control" name="libelle" placeholder="Entrer le libellé" required  value="{{$depense->libelle}}">
                            </div>
                    </div>

                    <div class="form-group-row">
                        <label for="aqui" class="col-sm-2 col-form-label">A qui</label>
                        <div class="col-sm-10">
                            <input type="texte" class="form-control" name="aqui" placeholder="Entrer a qui est destiné" required value="{{$depense->aqui}}">
                        </div>

                    </div>
                  
                    <div class="form-group-row">
                        <label for="montant" class="col-sm-2 col-form-label">Montant</label>
                        <div class="col-sm-10">
                            <input type="Number" class="form-control" name="montant" placeholder="Entrer le montant" required value="{{$depense->montant}}">
                        </div>

                    </div>

                    <div class="form-group-row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" placeholder="Entrer votre date de naissance" required value="{{$depense->date}}">
                        </div>

                    </div>
                    
                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Entrer Description" id="floatingTextarea2" style="height: 100px" value="{{$depense->description}}"></textarea>
                           
                        </div>
                    </div>
                <br>
                  
                <button type="submit" class="btn btn-primary">Modifier</button>
                <br><br>
                <a href="/all-depense/" class="btn btn-danger">Voir les Depenses</a>
                
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