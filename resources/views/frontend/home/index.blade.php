@extends('layouts.frontend.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="city" class="form-label fw-bold">Where are you going?</label>
                        <input type="text" class="form-control rounded-pill py-2" id="city" placeholder="Enter city or destination">
                    </div>
                    <div class="col-md-2">
                        <label for="checkin" class="form-label fw-bold">Check-in</label>
                        <input type="date" class="form-control rounded-pill py-2" id="checkin">
                    </div>
                    <div class="col-md-2">
                        <label for="checkout" class="form-label fw-bold">Check-out</label>
                        <input type="date" class="form-control rounded-pill py-2" id="checkout">
                    </div>
                    <div class="col-md-2">
                        <label for="guests" class="form-label fw-bold">Guests</label>
                        <select class="form-select rounded-pill py-2" id="guests">
                            <option selected>Guests</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5+</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h4>Popular destinations</h4>
            <div class="row d-flex align-items-stretch">
                @foreach ($touristSpots as $spot)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tourist-spot', ['id' => $spot->id, 'slug' => $spot->slug]) }}" class="text-decoration-none w-100">
                        <div class="card h-100">
                            <img src="{{ $spot->photo->first()->path ?? null }}" class="card-img-top" alt="{{ $spot->name }}" style="object-fit: cover; height: 200px">
                            <div class="card-body d-flex flex-column">
                                <h6 class="card-title">{{ $spot->name }}, {{ $spot->city->name }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                {{ $touristSpots->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection