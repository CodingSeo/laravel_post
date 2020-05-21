@extends('layout')
@section('content')
<small class="small text-muted">{{ $article->updated_at }}</small>
<div class="jumbotron">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
</div>
    <a class="btn btn-warning" href="{{ route('article.edit',$article->id) }}">수정</a>
    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">삭제</button>
      </form>
    <a class="btn btn-default" href="{{ route('article.index') }}">글 목록</a>
@endsection