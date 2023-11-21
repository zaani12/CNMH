@extends('Layouts.Layout')
@extends('Layouts.nav')
@section('content')
<section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ajouet Member</h3>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom </label>
                                            <input name="nom" type="text" class="form-control"
                                                id="exampleInputEmail1" placeholder="Enter Nom">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Prenom</label>
                                            <input name="Prenom" type="text" class="form-control"
                                                id="exampleInputPassword1" placeholder="Enter Prenom">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input name="startDate" type="email" class="form-control"
                                                id="exampleInputPassword1" placeholder="Enter Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input name="Password" type="password" class="form-control"
                                                id="exampleInputPassword1" placeholder="Enter Password">
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <a href="./index.html" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>

    </div>
    @endsection