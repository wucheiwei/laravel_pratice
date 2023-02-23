@extends('layouts.article')

@section('main')
    <h1>文章列表</h1>
    <a href="{{route('articles.create')}}">新增文章</a>
    @foreach($articles as $article)
        <div style="border-top:1px gray solid;">
            <h2><a href="{{route('articles.show',$article)}}">{{$article->title}}</a></h2>
            <p>{{$article->created_at}}由{{$article->user->name}}分享</p>
            <a href="{{route('articles.edit',$article)}}">編輯文章</a>
        </div>

    @endforeach
@endsection