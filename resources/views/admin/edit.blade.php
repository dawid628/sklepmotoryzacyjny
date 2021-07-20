@extends('layouts.app')
    @section('content')
        <!-- Section-->
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <h4>
                {{ session()->get('message') }}
            </h4>
        </div>
        @endif
        <section class="py-5">
            <form action="{{ route('part.update', ['id' => $parts->id]) }}" method="POST" id="contactForm"
                name="sentMessage">
                {{ csrf_field() }}
                @method('PUT')
                <!-- Name input-->
                <div class="form-floating mb-3">
                    <input value="{{ $parts->name }}" class="form-control" id="name" name="name" type="text"
                        placeholder="Enter your name..." data-sb-validations="required" />
                    <label for="name">Part's name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Enter part's name.</div>
                </div>
                <div class="form-floating mb-3">
                    <input value="{{ $parts->price }}" class="form-control" id="price" name="price" type="text"
                        placeholder="Enter your name..." data-sb-validations="required" />
                    <label for="name">Part's price</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Enter part's price.</div>
                </div>
                <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Save</button>
            </form>
        </section>
    @endsection    