@extends('layouts.layout')
@extends('layouts.nav')
@section('content')
<div class="container"> 
    <table class="table"> 
<thead> 
    <tr> 
        <th scope="col">Nom</th> 
        <th scope="col">Prenom</th> 
        <th scope="col">Action</th>
    </tr> </thead> 
    <tbody id="search-result">
        @foreach($tasks as $task)
    <tr>
    <th>{{$task->nom}}</th>
    <td>{{$task->description}}</td>
    <td>
        <a href="{{route('edit.task' , ['id' => $task->id])}}" class="btn btn-success">Modifier</a>
        <a href="{{route('delete.task' , ['id' => $task->id])}}" class="btn btn-danger">Supprimer</a>
    </td>

    </tr> 
    @endforeach
 </tbody> </table>
  <div id="pagination-links">
    {{$tasks->links()}}
    </div>
    </div>
    <script type="module">
  $(document).ready(function (){$('#search-input').on('keyup' , function(){
    var searchValue = $('#search-input').val();
    $.ajax({type:'POST' , url:'/search.task' , data :{search: searchValue , _token:'{{csrf_token()}}'},success: function (response){
      $('#search-result').empty();
      response.data.forEach(function (task){
        var taskId = task.id;
        var editLinkHref = editLink(taskId);
        var deleteLinkHref = deleteLink(taskId);
        var htmlRows = `
        <tr>
        <td>${task.nom}</td>
        <td>${task.prenom}</td>
        <td>${task.email}</td>
        <td>
        <a href="${editLinkHref}" class='btn btn-success'>Modifier</a>
        <a href="${deleteLinkHref}" class='btn btn-danger'>Supprimer</a>
        </td>
        </tr>
        `;
        $('#search-result').append(htmlRows);
      });
      $('#pagination-links').html(response.links);
      console.log(response.data)
    },
    error : function (xhr , status , error) {
      console.error('AJAX error:' , error);
    }
  }
    )
  })})
 function editLink(taskId) {
  return `{{route("edit.task" , ["id" => ":value"])}}`.replace(':value' , taskId);
 }
 function deleteLink(taskId){
  return `{{route('delete.task' , ['id' => ':value'])}}`.replace(':value' , taskId);
 }
</script>
@endsection
   