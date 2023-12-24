@extends('Layouts.Layout')
@extends('Layouts.nav')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List des  tach</h1>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-right">
                <a class="nav-link" href="{{route('add.task')}}">Ajouté une tache</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header col-md-12">
                        <div class=" p-0">
                            <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                <input type="text" name="table_search" id="searchTask" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit"  class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>description</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->nom}}</td>
                                    <td>
                                    {{$task->description}}
                                    </td>

                                    <td>
                                        <a href="{{route('edit.task', ['id' => $task->id])}}" class="btn btn-sm btn-default"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a type="button" class="btn btn-sm btn-danger"href="{{route('delete.task', ['id' => $task->id])}}"><i
                                                class="fa-solid fa-trash" ></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
{{$tasks->links()}}
</ul>

                       
                </div>

            </div>
        </div>
    </div>

</section>

</div>




@endsection