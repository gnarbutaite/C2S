
@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($chats as $chat)

            <div class="card col-lg-3">
                <a href="{{url('chat/'.$chat->id)}}">
                    <li class="list-group-item">
                      {{$chat->advertisement->title}}
                    </li>
                </a>
            </div>

        @endforeach
    </div>
@endsection
