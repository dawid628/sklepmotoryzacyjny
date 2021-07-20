@extends('layouts.app')
@section('content')
    <ul class="my-ul">
        <li><a class="btn btn-outline-dark" href="{{ route('add.part') }}">Create part</a></a></li>
        <li><a class="btn btn-outline-dark" href="{{ route('panel.parts') }}">View parts</a></a></li>
        <li><a class="btn btn-outline-dark" href="{{ route('panel.users') }}">View users</a></a></li>
    </ul>
@endsection