@extends('layouts.app')
@section('content')
    @foreach ($cart as $item)
    <form method="" action="{{ route('cart.delete', ['id' => $item->id]) }}">
        {{ $item['part'] }}
        <button class="btn btn-outline-dark">X</button>
    </form> 
    @endforeach
@endsection