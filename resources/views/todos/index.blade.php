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
                    <a class="btn btn-primary btn-sm mr-2" href="/todos-app/public/todos/{{ $todo->id }}">
                      View
                    </a>
                </div>
              </li>
            </ul>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection