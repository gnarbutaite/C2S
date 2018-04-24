@extends('layouts.app')

<style>
    body{
        background: url(http://mymaplist.com/img/parallax/back.png);
        background-color: #444;
        background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);
        background-image: url("kiwi-fruit.jpg");
        background-size:cover;
    }

    .vertical-offset-100{
        padding-top:100px;
    }
    p{
        padding-top:15px;
         text-align: center;
    }


</style>





@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
    <!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>

                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <fieldset>

                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                         @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                                         @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                         @endif
                                    </div>


                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required>
                                         @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirm Password" name="password" type="password" value="">
                                    </div>


                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    {{ __('Register') }}
                                </button>

                                <p>Already have an account? <a href="{{url('/login')}}"><b>Log in</b></a>!</p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
