@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['action' => 'AdvertisementController@update', 'method' => 'POST']) }}

        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$ad->title,['class' => 'form-control','placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description',$ad->description,['class' => 'form-control','placeholder' => 'Description'])}}
        </div>

        <div class="form-group">
            {{Form::label('subject','Subject')}}
            {{Form::select('subject', array('Math' => 'Math', 'French' => 'French'),$ad->subject)}}
        </div>

        <div class="form-group">
            {{Form::label('price','Price')}}
            {{ Form::number('price', $ad->price)}}
        </div>
        {{ Form::hidden('ad_id', $ad->id)}}

        {{Form::submit('submit',['class' => 'btn btn-primary'])}}

        {{ Form::close() }}
    </div>
@endsection
