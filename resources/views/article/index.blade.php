@extends('layout')
@section('content')
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="..." class="card-img" alt="">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">
          <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
        </h5>
        <p class="card-text">{{ $article->content }}</p>
        <p class="card-text"><small class="text-muted">{{ $article->updated_at }}</small></p>
      </div>
    </div>
  </div>
</div>
@endsection