@extends('layouts.app')
    @section('content')
        <!-- Section-->
        <section class="py-5">
            <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
               </ul>
            <form action="{{ route('store') }}" method="POST" id="contactForm" name="sentMessage">
                {{ csrf_field() }}
                  <div class="form-floating mb-3">
                      <select name="category_ids" class="custom-select" id="inputGroupSelect01">
                          <option selected>Category</option>
                          @foreach (\App\Models\Category::all() as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                        <select name="car_ids" class="custom-select" id="inputGroupSelect01">
                            <option selected>Car</option>
                            @foreach (\App\Models\Car::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->brand }}, {{ $item->model }}</option>
                            @endforeach
                          </select>
                          <select name="engine_ids" class="custom-select" id="inputGroupSelect01">
                            <option selected>Engine</option>
                            @foreach (\App\Models\Engine::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->liters }}</option>
                            @endforeach
                          </select>
                          <select name="bodywork_ids" class="custom-select" id="inputGroupSelect01">
                            <option selected>Bodywork</option>
                            @foreach (\App\Models\Bodywork::all() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                  </div>
                  <div class="form-floating mb-3">
                      <input class="form-control" id="name" name="name" type="text" />
                      <label for="name">Name</label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">Enter part's name.</div>
                  </div>
                  <div class="form-floating mb-3">
                      <input class="form-control" id="name" name="price" type="number" />
                      <label for="price">Price</label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">Enter part's price</div>
                  </div>
                  <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Add part</button>
              </form>

        </section>
    @endsection    