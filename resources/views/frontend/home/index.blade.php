@extends('layouts.frontend.index')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Enjoy the trip!</h1>
            <p>A platform for tourists and owners of tourist facilities. Find the original place for the holidays!
            </p>
            <p>Place your home on the site and let yourself be found by many tourists!</p>
        </div>
        <div class="col-md-6">
            <form class="bg-light p-4 rounded">
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter city">
                </div>
                <div class="mb-3">
                    <label for="checkin" class="form-label">Check-in</label>
                    <input type="date" class="form-control" id="checkin">
                </div>
                <div class="mb-3">
                    <label for="checkout" class="form-label">Check-out</label>
                    <input type="date" class="form-control" id="checkout">
                </div>
                <div class="mb-3">
                    <label for="roomsize" class="form-label">Room size</label>
                    <select class="form-select" id="roomsize">
                        <option selected>Choose...</option>
                        <option value="1">1 person</option>
                        <option value="2">2 persons</option>
                        <option value="3">3 persons</option>
                        <option value="4">4 persons</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2>Interesting places</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="city1.html" class="text-decoration-none">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1444723121867-7a241cacace9?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top" alt="City 1">
                            <div class="card-body">
                                <h5 class="card-title">Griffith Observatory, Los Angeles, United States</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="city2.html" class="text-decoration-none">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top" alt="City 2">
                            <div class="card-body">
                                <h5 class="card-title">New York, United States</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="city3.html" class="text-decoration-none">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1444084316824-dc26d6657664?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top" alt="City 3">
                            <div class="card-body">
                                <h5 class="card-title">Saint Paul, United States</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="city3.html" class="text-decoration-none">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?q=80&w=2694&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top" alt="City 4">
                            <div class="card-body">
                                <h5 class="card-title">Tokyo, Japan</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection