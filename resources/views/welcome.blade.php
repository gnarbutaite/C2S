
@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center" >

        <div class="container"style="padding-top: 1%">
            <div id="img">
            <img align="" height="180dp" WIDTH="180dp" src="/uploads/rad_kiwi_v4.png" class="pull-left"/>
            </div>
            <div id="bdy">
            <h1><strong>Coach 2 Student</strong></h1>

            <h2>
                <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Sign in</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>
            </h2>
            </div>
        </div>
    </section>



        <div class="w-100 p-3">
            <div class="container" style="padding-bottom: 2%; padding-top: 1%">

                <div class="row">
                    <h1></h1>
                    <p  class="text-center" ><font size="5">Meet kiwi, a platform that connects two essential components: teaching and learning. Kiwi is the right platform for you
                                if you're an expert within a particular field or if you want to gain a better understanding of a certain area.
                                Share your knowledge with others or gain new insights!</font></p><br><br>
                </div>
            </div>
        </div>

@endsection


