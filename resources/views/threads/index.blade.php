@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Threads</div>

                    <div class="card-body">
                        @foreach($threads as $thread)
                            <div class="card-header">{{ $thread->created_at->diffForHumans() }}</div>
                            <a href="{{ $thread->path() }}">
                                {{ $thread->title }}
                            </a>
                            <div class="body">{{ $thread->body }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
