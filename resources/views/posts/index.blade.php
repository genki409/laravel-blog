@extends('layouts.app_orijinal')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card text-center">
            <div class="card-header">
                投稿一覧
            </div>
            @foreach($posts as $post)
            <div class="card-body">
                <h5 class="card-title">タイトル : {{ $post->title }}</h5>
                <p class="card-text">
                  内容 : {{ $post->body }}
                </p>
                <p class="card-text">投稿者：Seed Techさん</p>
                <a href="#" class="btn btn-primary">詳細へ</a>
            </div>
            <div class="card-footer text-muted">
                投稿日時 : {{ $post->created_at }}
            </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-2">
          <a href="#" class="btn btn-primary">
            新規投稿
          </a>
        </div>
    </div>
  </div>
@endsection