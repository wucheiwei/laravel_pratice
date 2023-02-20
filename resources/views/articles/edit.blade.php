@extends('layouts.article')

@section('main')
<h1>文章>編輯文章</h1>
    @if($errors->any())
        <div style="background-color: red" >
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('articles.update' , $article)}}" method='POST'>
        @csrf
        @method('patch')
        <div style="margin-bottom:10px;">
            <label for="">標題</label>
            <input type="text" value="{{$article->title}}" name='title' style='border-color: gray;padding:2px;'>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="">內文</label>
            <textarea name="content"  cols="30" rows="10" style='border-color:gray;padding:2px;'>{{$article->content}}</textarea>
        </div>

        <div>
            <button type="submit">更新文章</button>
        </div>
    </form>
    
@endsection