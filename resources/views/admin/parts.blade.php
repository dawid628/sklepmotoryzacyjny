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
                            <th scope="col">price</th>
                            <th scope="col">categories</th>
                            <th scope="col">cars</th>
                            <th scope="col">engines</th>
                            <th scope="col">actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($parts as $part) 
                                <tr>
                                    <th scope="row">{{ $part->id }}</th>
                                    <td>{{ $part->name }}</td>
                                    <td>{{ $part->price }}</td>
                                    <td>{{ $part['categories.name'] }} </td>
                                    <td>{{ $part['cars.name'] }} </td>
                                    <td>{{ $part['engines.name'] }} </td>
                                    <td><a href="{{ route('edit.part', ['id' => $part->id]) }}" class="btn btn-success">Edytuj</a>
                                        <form method="POST" action="{{ route('delete.part', ['id' => $part->id]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Usuń</button>
                                        </form></td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$parts->links()}}
                    </div>
                  </section>
                      @endsection