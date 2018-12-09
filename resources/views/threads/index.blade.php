@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Threads</div>

                    <div class="card-body">
                        @foreach($threads as $thread)
                            <h2>{{ $thread->title }}</h2>
                            <p>{{ $thread->body }}</p>
                        @endforeach
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
