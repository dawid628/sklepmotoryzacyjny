@extends('layouts.app')
    @section('content')
        <!-- Section-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($parts as $part)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://static.trisports.com/productimages/images450/pt1021-6.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$part->name}}</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    {{ $part->price }}PLN
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form method="POST" action="{{ route('cart.add', ['id' => $part->id]) }}">
                                @csrf
                                <input name="id" value="{{ $part->id }}" type="hidden"/>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <hr>
                    <span>
                      {{ $parts->links() }}
                    </span>
                  </div>
            </div>
    @endsection    