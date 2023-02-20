@extends('layouts.article')

@section('main')
    <h1>新增文章</h1>
    @if($errors->any())
        <div style="background-color: red" >
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('articles.store')}}" method='POST'>
        @csrf
        <div style="margin-bottom:10px;">
            <label for="">標題</label>
            <input type="text" value="{{old('title')}}" name='title' style='border-color: gray;padding:2px;'>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="">內文</label>
            <textarea name="content"  cols="30" rows="10" style='border-color:gray;padding:2px;'>{{old('content')}}</textarea>
        </div>

        <div>
            <button type="submit">新增文章</button>
        </div>
    </form>
    
@endsection