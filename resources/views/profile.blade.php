@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }}'s Profile</h2>
                <label>Update Profile Image</label>
                <form enctype="multipart/form-data" action="/profile" method="POST">

                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>

            </div>

        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name   ') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div> <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name   ') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div> <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div> <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description ') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="row justify-content-center">My advertisements</h1>
        <div class="row justify-content-center">



            @foreach($ads as $ad)
                <div class="col-md-8" style="margin-bottom:20px">
                    <div class="card">
                        <div class="card-header"style="margin-bottom:10px;">{{$ad->title}}</div>

                        <ul class="list-group">
                            <li class="list-group-item">{{$ad->subject}}</li>
                            <li class="list-group-item">{{$ad->description}}</li>
                            <li class="list-group-item">{{$ad->price}}</li>
                        </ul>
                    </div>
                </div>
            @endforeach

                <a href="{{url('/createAd')}}" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-plus"></span> Add
                </a>

        </div>






@endsection