<?php
$route = "/todos-app/public";
?>

@extends('layouts.app')

@section('title')
    Todos List
@endsection

@section('content')
  <h1 class="text-center my-5">Todos Page</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">
            Todos
        </div>
        <div class="card-body">
          @foreach($todos as $todo)
            <ul>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    {{ $todo->name }}
                    <div>
                      <a class="btn btn-primary btn-sm mr-2" href="<?php echo $route ?>/todos/{{ $todo->id }}">
                        View
                      </a>
                      @if(!$todo->completed)
                      <a class="btn btn-warning btn-sm mr-2" style="color: white" href="<?php echo $route ?>/todos/{{ $todo->id }}/complete">
                        Complete
                      </a>
                      @endif
                    </div>
                </div>
              </li>
            </ul>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection