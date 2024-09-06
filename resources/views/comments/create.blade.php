@extends('layouts.app')

@section('title') Add Comment @endsection

@section('content')
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <div class="card mt-5">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Add Comment</h5>
            </div>
            <div class="card-body">
                <textarea name="comment" class="form-control resize-none" placeholder="Add to the discussion" rows="3">{{ old('comment') }}</textarea>
                <button class="btn btn-dark mt-3">Add Comment</button>
            </div>
        </div>
    </form>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if($comments->count())
        <div class="card mt-5">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Comments</h5>
            </div>
            <div class="card-body">
                @foreach($comments as $comment)
                    <div class="mb-3 p-3 border rounded">
                        {{ $comment->comment }}
                    </div>
                @endforeach
            </div>
        </div>
    @else   
        <div class="card mt-5">
            <div class="card-body">
                <p>No comments yet.</p>
            </div>
        </div>
    @endif
@endsection
