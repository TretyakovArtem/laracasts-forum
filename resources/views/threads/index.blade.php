@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            @foreach($threads as $thread)
                <div class="card">
                    <div class="card-header">{{ $thread->created_at->diffForHumans() }}</div>
                    <div class="card-body">
                            <a href="{{ $thread->path() }}">
                                {{ $thread->title }}
                            </a>
                            <div class="body">{{ $thread->body }}</div>
                    </div>
                </div>
                <br>
            @endforeach
            </div>
        </div>
    </div>
@endsection
