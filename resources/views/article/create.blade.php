@extends('layout')
@section('content')
<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">제목</label>
      <input 
      type="text"
      name="title"
      id="title"
      class="form-control @error('title') is-invalid @enderror"
      placeholder=""
      aria-describedby="title"
      value="{{ old('title') }}">
      @error('title')
      <p class="invalid-feedback">제목을 입력하세요</p>
      @enderror
    </div>
    <div class="form-group{{$errors->has('files') ?
      'has-error' : ''}}">
      <label for="files">파일</label>
      <input type="file" name="files[]" id="files" clas="form-control"
      multiple="multiple"/>
      {!! $errors->first('files.0','<span class="form-error">:message</span>') !!}
     <div>
    <div class="form-group">
      <label for="content">내용</label>
      <textarea class="form-control
      @error('content') is-invalid  @enderror"
      name="content" id="content" rows="3">{{ old('content') }}
      </textarea>
      @error('content')
      <p class="invalid-feedback">내용을 입력하세요</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">저장</button>
</form>
@endsection