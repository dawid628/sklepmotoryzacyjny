@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success" role="alert">
    <h4>
        {{ session()->get('message') }}
    </h4>
</div>
@endif
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">  
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user) 
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('delete.user', ['id' => $user->id]) }}">
                                          @csrf
                                          @method('delete')
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </section>
                  {{$users->links()}}
                      @endsection