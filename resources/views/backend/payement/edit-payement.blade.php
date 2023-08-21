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
                        <h5 class="card-title">Modifier un Payement</h5>
                    </div>

                    <div class="card-body"><!--card body-->
                        <form role="form" action="{{route('UpdatePayement')}} " method="POST">
                            @csrf

                            <div class="form-group-row">
                                <label for="id" class="col-sm-2 col-form-label">Id </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id" placeholder="Entrer votre nom "  value="{{$payement->id}}">
                                </div>

                            </div>
                            
                            <div class="form-group-row">
                                <label for="categorie" class="col-sm-2 col-form-label">Categorie </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="categorie" placeholder="Entrer la catégorie "value="{{$payement->categorie}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" placeholder="Entrer la date" value="{{$payement->date}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="prix" class="col-sm-2 col-form-label">Prix</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="prix" placeholder="Entrer Le Prix" value="{{$payement->prix}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="montantpaye" class="col-sm-2 col-form-label">Montant Payer</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="montantpaye" placeholder="Entrer le montant payé" value="{{$payement->montantpaye}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="montantrestant" class="col-sm-2 col-form-label">Montant Restant</label>
                                <div class="col-sm-10">
                                    <input type="int" class="form-control" name="montantrestant" placeholder="Entrer montant restant" value="{{$payement->montantrestant}}">
                                </div>

                            </div>

                            <div class="form-group-row">
                                <label for="apprenant_id" class="col-sm-2 col-form-label">Apprenant</label>
                                <div class="col-sm-10">
                                    <select name="apprenant_id" class="form-control" id="Example">
                                        <option value="">Nom d'apprenant</option>
                                        @foreach ($apprenants as $apprenant)
                                            <option value="{{$apprenant->id}}">{{ $apprenant->prenom }} {{ $apprenant->nom }}</option>  
                                        @endforeach 
                                    </select>
                                </div>
                            </div>

                        </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Modifier</button>

                                <a href="/all-payement" class="btn btn-danger">Liste Payements</a>

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