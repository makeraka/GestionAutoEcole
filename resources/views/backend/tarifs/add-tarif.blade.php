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
                        <h5 class="card-title">Ajouter Tarif</h5>
                    </div>

            <div class="card-body"><!--card body-->
                <form action="{{route('InsertTarif')}}" method="POST">
                                @csrf
                    <div class="form-group-row">
                         <label for="permis" class="col-sm-2 col-form-label">Catégorie Permis</label>
                        <div class="col-sm-10">
                            <select name="permis" class="form-control" id="Example">
                                <option value="">Type Permis</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="A+E">B+E</option>
                                <option value="C">C</option>
                                <option value="C+E">C+E</option>
                                <option value="D">D</option>
                                <option value="D">D</option>                                        <option value="D+E">D+E</option> 
                            </select>
                        </div>
                    </div> 

                                         
                            
                            
                            <div class="form-group-row">
                                <label for="type" class="col-sm-2 col-form-label">Type Cours</label>
                                <div class="col-sm-10">
                                    <select name="type" class="form-control" id="Example">
                                        <option value="">Type Cours </option>
                                        <option value="Theorie">Théorie</option>
                                        <option value="Pratique">Pratique</option>
                                    </select>
                                </div>
                            </div> 
                  
                    <div class="form-group-row">
                        <label for="montant" class="col-sm-2 col-form-label">Montant</label>
                        <div class="col-sm-10">
                            <input type="Number" class="form-control" name="montant" placeholder="Entrer le montant" required>
                        </div>

                    </div>
                    
                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Entrer Description" id="floatingTextarea2" style="height: 100px"></textarea>
                           
                        </div>
                    </div>


                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="avatar">Image</label>
                            <input type="file" class="form-control" name="avatar" placeholder="Entrer le montant" required>
                           
                        </div>
                    </div>

                    <div class="form-groupe">
                        <div class="col-sm-10">
                            <label for="tarifier">Tarifier</label>
                            <input type="texte" class="form-control" name="tarifier" placeholder="Tarifier " required>
                           
                        </div>
                    </div>

                    
                    <br>
                  
                    <button type="submit" class="btn btn-success text-white fw-bold">AJOUTER</button>
                    <br><br>
                    <a href="/all-tarif/" class="btn btn-primary text-white fw-bold">Voir Tarif</a>
                
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