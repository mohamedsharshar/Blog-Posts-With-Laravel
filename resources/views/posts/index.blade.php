@extends('layouts.app')

@section('title') Home @endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Posts</h2>
            <div class="">
                <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
                <a href="{{ route('comments.create') }}" class="btn btn-dark">Add Comment</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr class="hover-table-row">
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user ? $post->user->name : 'not found' }}</td>
                            <td>{{ $post->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info text-white">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                <form style="display: inline;" method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; {{ date('Y') }} Mohamed SharShar. All Rights Reserved.</p>
    </footer>
    <style>
        .hover-table-row:hover {
            background-color: #f5f5f5;
        }
    </style>
@endsection
