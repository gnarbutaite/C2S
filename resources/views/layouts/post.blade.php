<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




@foreach($ads as $ad)
    <div class="container  padding: align-content-xl-around ">
        <div class="card">
            <div class="[ col-xs-12 col-sm-offset-x1 justify-content-lg-center ]">
                <div class="[ panel panel-default ] panel-google-plus">

                    <div class="card-header" style="padding-left:40px">
                        <h1><b>{{$ad->title}}</b></h1>
                    </div>

                    <div class="card-block">
                        <img style="width: 30%; height: 30%" class="card-img-top img-fluid img-circle col-4 mx-auto d-flex justify-content-center flex-wrap" src="/uploads/avatars/{{$ad->user->avatar}}" alt="Card image cap" />
                        <h3 class="text-center" ><b>{{$ad->user->name}}</b></h3>
                    </div>
                   <!-- <div class="panel-footer" >
                        <button type="button" class="[ btn btn-default ]">+1</button>
                        <button type="button" class="[ btn btn-default ]">
                            <span class="[ glyphicon glyphicon-share-alt ]"></span>
                        </button>
                    </div>-------->

                        <p class="card-text col-lg-12 text-center"><strong>{{$ad->description}}</strong></p>

                    <div class="card-footer">
                        <form action="/new-chat" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="coach_id" value="{{$ad->user->id}}">
                            <input type="hidden" name="ad_id" value="{{$ad->id}}">

                            <input type="submit">
                        </form>
                        <a href="http://www.pornhub.com/" class="btn btn-lg btn-info btn-block">Contact the coach</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach