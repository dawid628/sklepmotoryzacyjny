@extends('layouts.app')
    @section('content')
    <form method="GET" action="{{ route('list.creating') }}">
        <button class="btn btn-outline-dark">New list</button>
    </form> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">product</th>
            <th scope="col">price</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($lists as $list) 
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->name }}</td>
                <td>{{ $list->price }}</td>
                <td>
                    <form method="POST" action="{{ route('listpart.delete', ['id' => $list->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-dark" href="">Delete</button>
                        {{-- <a class="btn btn-outline-dark" href="{{route('list.show', ['id' => $list->id])}}">Show</a>
                        <a class="btn btn-outline-dark" href="">Cart</a> --}}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    @endsection    