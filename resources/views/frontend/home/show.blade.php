@extends('layouts.frontend.index')
@section('content')
<div class="container">
    <h1 class="mb-4">{{ $touristSpot->name }}</h1>
    <div class="row">
        <div class="col-md-8">
            <p><strong>City:</strong> {{ $touristSpot->city->name }}</p>
            <p><strong>Address:</strong> {{ $touristSpot->address->address ?? 'Updating' }}</p>
            <p><strong>Description:</strong> {{ $touristSpot->description }}</p>
            <p><strong>Created At:</strong> {{ \Carbon\Carbon::parse($touristSpot->created_at)->format('d/m/Y') }}</p>
            <p><strong>Last Updated:</strong> {{ \Carbon\Carbon::parse($touristSpot->updated_at)->format('d/m/Y') }}</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="true">Gallery</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rooms-tab" data-bs-toggle="tab" data-bs-target="#rooms" type="button" role="tab" aria-controls="rooms" aria-selected="false">Rooms</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="liked-users-tab" data-bs-toggle="tab" data-bs-target="#liked-users" type="button" role="tab" aria-controls="liked-users" aria-selected="false">Liked By</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">Comments</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="articles-tab" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab" aria-controls="articles" aria-selected="false">Articles</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                    <div class="row mt-4">
                        @foreach($touristSpot->photo as $photo)
                        <div class="col-md-4 mb-4">
                            <img src="{{ $photo->path }}" class="img-fluid" alt="Tourist Spot Image">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="rooms" role="tabpanel" aria-labelledby="rooms-tab">
                    <div class="row mt-4">
                        @foreach($touristSpot->rooms as $room)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                @if(count($room->photos) > 0)
                                <img src="{{ $room->photos[0]->path }}" class="card-img-top" alt="Room Image">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">Room Number: {{ $room['room_number'] }}</h5>
                                    <p class="card-text"><strong>Size:</strong> {{ $room['room_size'] }} persons</p>
                                    <p class="card-text"><strong>Price:</strong> ${{ $room['price'] }} per night</p>
                                    <p class="card-text"><strong>Description:</strong> {{ $room['description'] }}</p>
                                    <p class="card-text"><strong>Created At:</strong> {{ \Carbon\Carbon::parse($room['created_at'])->format('d/m/Y') }}</p>
                                    <p class="card-text"><strong>Last Updated:</strong> {{ \Carbon\Carbon::parse($room['updated_at'])->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="liked-users" role="tabpanel" aria-labelledby="liked-users-tab">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <ul class="list-group">
                                @forelse($touristSpot->likedByUsers as $user)
                                <li class="list-group-item">{{ $user->full_name }}</li>
                                @empty
                                <li class="list-group-item">No one likes this place yet</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <ul class="list-group">
                                @forelse($touristSpot->comments as $comment)
                                <li class="list-group-item">
                                    <p><strong>Description:</strong> {{ $comment['content'] }}</p>
                                    <p><strong>User:</strong> {{ $comment->user->full_name }}</p>
                                    <p><strong>Created at:</strong> {{ \Carbon\Carbon::parse($comment['created_at'])->format('d/m/Y H:i') }}</p>
                                    <p><strong>Rating:</strong> {!! $comment->rating !!}</p>
                                </li>
                                @empty
                                <li class="list-group-item">There are no comments for this tourist destination yet.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="articles" role="tabpanel" aria-labelledby="articles-tab">
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <ul class="list-group">
                                @forelse($touristSpot->articles as $article)
                                <li class="list-group-item">
                                    <h5>{{ $article->title }}</h5>
                                    <p>{{ Str::limit($article['content'], 150, '...') }}</p>
                                    <p><strong>Author:</strong> {{ $article->user->full_name }}</p>
                                    <p><strong>Published on:</strong> {{ \Carbon\Carbon::parse($article['created_at'])->format('d/m/Y') }}</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                </li>
                                @empty
                                <li class="list-group-item">No articles available for this tourist spot.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection