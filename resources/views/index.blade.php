@extends('layouts.app')
@section('content')
<div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>All Taks</h2>
                    </div>
                    <div class="row">
                    <ul>
                    @foreach($tasks as $task)
                    <li> {{$task->list}}</li>
                    @endforeach
                    </ul>
                    </div>
                    </div>
                    </div>
@endsection