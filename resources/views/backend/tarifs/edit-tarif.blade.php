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
                        <h5 class="card-title">Modifier Tarif</h5>
                    </div>

            <div class="card-body"><!--card body-->
                <form action="{{route('UpdateTarif')}}" method="POST">
                                @csrf



                                <div class="form-group-row">
                                    <label for="id" class="col-sm-2 col-form-label">Id</label>
                                    <div class="col-sm-10">
                                        <input type="texte" class="form-control" name="id" placeholder="Entre" value="{{$tarif->id}}">
                                    </div>

                                </div>
                                
           
                                <div class="form-group-row">
                                    <label for="permis" class="col-sm-2 col-form-label">Catégorie Permis</label>
                                    <div class="col-sm-10">
                                        <select name="permis" class="form-control" id="Example" value="{{$tarif->permis}}">
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
                                <label for="type" class="col-sm-2 col-form-label">Type Cours</label>
                                <div class="col-sm-10">
                                    <select name="type" class="form-control" id="Example" value="{{$tarif->type}}">
                                        <option value="">Type Cours </option>
                                        <option value="Theorie">Théorie</option>
                                        <option value="Pratique">Pratique</option>
                                    </select>
                                </div>
                            </div> 
                  
                    <div class="form-group-row">
                        <label for="montant" class="col-sm-2 col-form-label">Montant</label>
                        <div class="col-sm-10">
                            <input type="Number" class="form-control" name="montant" placeholder="Entrer le montant" value="{{$tarif->montant}}">
                        </div>

                    </div>
                    
                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Entrer Description" value="{{$tarif->description}}"></textarea>
                           
                        </div>
                    </div>

                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="tarifier">Tarifier</label>
                            <textarea class="form-control" name="tarifier" placeholder="Entrer Tarifier" value="{{$tarif->nom}}"></textarea>
                           
                        </div>
                    </div>
                    <br>
                  
                    <button type="submit" class="btn btn-success text-white fw-bold">Modifer</button>
                    <br><br>
                    <a href="/all-tarif/" class="btn btn-primary text-white fw-bold">Voir Tarifs</a>
                
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