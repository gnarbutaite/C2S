@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($messages as $message)

            {{$message->user->name}}
            {{$message->message}}

        @endforeach

        {{ Form::open(['action' => 'ChatController@storeMessage', 'method' => 'POST']) }}

            <div class="form-group">
                {{Form::label('message','Message')}}
                {{Form::text('message','',['class' => 'form-control','placeholder' => 'message'])}}
            </div>

            {{ Form::hidden('chat_id', $chat_id)}}


            {{ Form::close() }}



    </div>
@endsection
