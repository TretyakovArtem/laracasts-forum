<div class="card">
    <div class="panel-heading">
        <a href="#">{{ $reply->owner->name }}</a>
            said {{ $reply->created_at->diffForHumans() }}
    </div>
    <div class="card-body">
        <p>{{ $reply->body }}</p>
    </div>
</div>