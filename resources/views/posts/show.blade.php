@extends('layouts.app')

@section('title') View @endsection

@section('content')
    <div class="container mt-4">
        <!-- Post Information Card -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Post Info</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">{{$post->title}}</p>
                <h5 class="card-title">Description</h5>
                <p class="card-text">{{$post->description}}</p>
            </div>
        </div>

        <!-- Post Creator Information Card -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Post Creator Info</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Name</h5>
                <p class="card-text">{{$post->user ? $post->user->name : 'not found'}}</p>
                <h5 class="card-title">Email</h5>
                <p class="card-text">{{$post->user ? $post->user->email : 'not found'}}</p>
                <h5 class="card-title">Created At</h5>
                <p class="card-text">{{$post->user ? $post->user->created_at->format('Y-m-d H:i:s') : 'not found'}}</p>
            </div>
        </div>


    </div>
@endsection
