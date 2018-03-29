@extends('layouts.app')

@section('content')
<div class="container">
    {{ Form::open(['action' => 'AdvertisementController@store', 'method' => 'POST']) }}

        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description','',['class' => 'form-control','placeholder' => 'Description'])}}
        </div>

        <div class="form-group">
            {{Form::label('subject','Subject')}}
            {{Form::select('subject', array('Math' => 'Math', 'French' => 'French'))}}
        </div>

        <div class="form-group">
            {{Form::label('price','Price')}}
            {{ Form::number('price', 'value')}}
        </div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}

    {{ Form::close() }}
</div>
@endsection
