@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    @foreach($ads as $ad)
                    <div class="card-header"><h1>{{$ad->title}}</h1></div>
                        <div class="card-body">
                            <ul>
                                <img src="/uploads/avatars/{{$ad->user->avatar}}"/>
                                <h1>{{$ad->user->name}}</h1>
                                <li>{{$ad->title}}</li>
                            </ul>
                        </div>

                    @endforeach

        </div>
    </div>
</div>
@endsection
