@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <center>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('successE'))
        <div class="alert alert-danger">
            {{ session('successE') }}
        </div>
        @endif
      </center>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Tareas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('task.create') }}" class="btn btn-info" >Añadir Tarea</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>ID</th>
               <th>Nombre</th>
               <th>Descripcion</th>              
             </thead>
             <tbody>
              @if($tasks->count())  
              @foreach($tasks as $task)  
              <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->name}}</td>
                <td>{{$task->description}}</td>
                <td><a class="btn btn-primary btn-xs" title="Editar" href="{{action('TaskController@edit', $task->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('TaskController@destroy', $task->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" title="Eliminar" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection