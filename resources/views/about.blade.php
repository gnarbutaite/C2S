<style>
    .jumbotron {
        background: rgb(200, 54, 54); /* This is for ie8 and below */
        background: rgba(200, 54, 54, 0.5);
        opacity: 0.80;
        background-color: #343a40!important;
        border: sienna;


        padding: 20px 5px 20px 15px;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
        font-size: 18px;
        font-weight: 200;
        line-height: inherit;
        outline-width: thick;
        outline-style: solid;
        border-radius: 6px;
        outline-color: #212529;

        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }


    class.card{
        opacity:0.9;
    }

</style>



@extends('layouts.app')

@section('content')


    <div class=" container-fluid">

           <div class="jumbotron jumbotron-fluid ">
               <hr class="my-4">
                 <h1 class="display-3 text-center" style="color: #e9ecef; font-size: xx-large">About Kiwi</h1>
               <hr>
                 <div class="row ">
                 <p class="text-center" style="color: #c6c8ca; font-size: large">Kiwi is a student-initiated project aimed at connecting tutors to students.
                     We, as higher education students ourselves, often faced problems finding additional knowledge outside our current study program,
                     thus, as a project during our minor, we came up with Kiwi. Kiwi is a platform that aims to connect available knowledge of (free-lance) tutors
                     to higher education students that need help with their current study or are curious in subjects outside of their current field.
                     There is a lot knowledge out there which is currently not (fully) utilized, at the same time, there are numerous students who want to obtain extra knowledge,
                     but do not know where and how to obtain this. This is where Kiwi comes into play, the platform allows you as a student to find an overview of potential
                     tutors based on your search criteria.
                     Futhermore, you are equally welcome to sign up as a tutor and share knowledge of your current study!<br><br>
                     We, as Kiwi, want to support a way of education where students are not limited to their current study, but rather decide for themselves what they want to learn.
                     In this manner, we hope to encourage studying by allowing the student to put together his own “packet” of knowledge, with an eye on his future plans.</p>
                 </div>

           </div>

        <div class="jumbotron jumbotron-fluid ">
                 <hr class="my-4">
              <h1 class="display-4 text-center" style="color: #e9ecef; font-size: xx-large">About us</h1>
            <hr>
            <p class="text-center" style="color: #c6c8ca; font-size: large">
                     We, the creators of Kiwi, are 9 students from several fields of work and nationalities. We congragated in the Kiwi project,
                     because we faced similar problems within our current study course. We aim to prevent our peer students from comparable problems.
                     For identifying and validating the problems and needs of students, Kiwi instigated a Business team, this business team ……
                     and converge client needs and preferences in programmable ideas for our Development Team.
                   </p>

        </div>
<!--

            <div class="card-group">
                <div class="row">

                    <div class="col-md-6 col-lg-4">
                        <div class="card" style="width:35rem; opacity: .9"><img class="card-img"  src="willem.jpeg" />
                            <div class="card-block">
                                <h3 class="card-title text-center"><b>Development Team</b></h3>
                                <hr>
                                <p class="card-text text-center"><strong>Willem Lemmens</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4">
                        <div class="card" style="width:45rem; opacity: .9"><img class="card-img"  src="ginte1.jpg" />
                            <div class="card-block">
                                <h3 class="card-title text-center"><b>Development Team</b></h3>
                                <hr>
                                <p class="card-text text-center"><strong>Gintare Narbutaite</strong></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-md-4">
                        <div class="card" style="width:45rem; opacity: .9"><img class="card-img"  src="mesfin.jpg" />
                            <div class="card-block">
                                <h3 class="card-title text-center"><b>Development Team</b></h3>
                                <hr>
                                <p class="card-text text-center"><strong>Gintare Narbutaite</strong></p>
                            </div>
                        </div>
                    </div>




-->





                </div>






    @endsection




        <!--

                <div class="row">
                    <div class="col-6 col-md-4">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">

                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <a target="_blank" href="http://scripteden.com/">Script Eden</a>
                                    </div>
                                    <div class="desc">Passionate designer</div>
                                    <div class="desc">Curious developer</div>
                                    <div class="desc">Tech geek</div>
                                </div>
                                <div class="bottom">
                                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" rel="publisher"
                                       href="https://plus.google.com/+ahmshahnuralam">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" rel="publisher"
                                       href="https://plus.google.com/shahnuralam">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                 </div>
                </div>


                <div class="row">
                    <div class="col-6 col-md-4">


                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">

                                    <div class="card hovercard">
                                        <div class="cardheader">

                                        </div>
                                        <div class="avatar">
                                            <img alt="" src="http://lorempixel.com/100/100/people/9/">
                                        </div>
                                        <div class="info">
                                            <div class="title">
                                                <a target="_blank" href="http://scripteden.com/">Script Eden</a>
                                            </div>
                                            <div class="desc">Passionate designer</div>
                                            <div class="desc">Curious developer</div>
                                            <div class="desc">Tech geek</div>
                                        </div>
                                        <div class="bottom">
                                            <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm" rel="publisher"
                                               href="https://plus.google.com/+ahmshahnuralam">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="btn btn-primary btn-sm" rel="publisher"
                                               href="https://plus.google.com/shahnuralam">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                                <i class="fa fa-behance"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

          -->
