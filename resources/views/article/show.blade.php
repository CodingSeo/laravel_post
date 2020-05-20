@extends('layout')
@section('content')
<small class="small text-muted">{{ $article->updated_at }}</small>
{{-- <h5 class="card-title">
<div class="mt-3 pt-3 border-top">{{ $article->title }}</div>
<h5>
<div class="mt-3 pt-3 border-top"></div> --}}
<script>
    function post_delete(id){
        //use ajax to remove the post
        console.log(id);
    }
</script>
<div class="jumbotron">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
</div>
    <a class="btn btn-warning" href="{{ route('article.edit',$article->id) }}">수정</a>
    <button class="btn btn-danger" onclick="post_delete({{ $article->id }})">삭제</button>
    <a class="btn btn-default" href="{{ route('article.index') }}">글 목록</a>
@endsection