@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($chats as $chat)

            <div>
                <a href="{{url('chat/'.$chat->id)}}">{{$chat->advertisement->title}}</a>
            </div>

        @endforeach
    </div>
@endsection
