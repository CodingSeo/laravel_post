@extends('layout')
@section('content')
<small class="small text-muted">{{ $article->updated_at }}</small>
<div class="mt-3 pt-3 border-top">{{ $article->content }}</div>
@endsection