<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




@foreach($ads as $ad)
    <div class="container padding: align-content-xl-around">
        <div class="row">
            <div class="[ col-xs-12 col-sm-offset-x1 col-sm-7 ]">
                <div class="[ panel panel-default ] panel-google-plus">

                    <div class="panel-heading">
                        <h1>{{$ad->title}}
                        </h1>
                    </div>

                    <div class="panel-body">
                        <img style="width: 30%; height: 30%" class="card-img-top img-fluid img-circle col-4 mx-auto d-flex justify-content-center flex-wrap" src="/uploads/avatars/{{$ad->user->avatar}}" alt="Card image cap" />
                        <h3 class="text-center " ><b>{{$ad->user->name}}</b></h3>
                    </div>
                   <!-- <div class="panel-footer" >
                        <button type="button" class="[ btn btn-default ]">+1</button>
                        <button type="button" class="[ btn btn-default ]">
                            <span class="[ glyphicon glyphicon-share-alt ]"></span>
                        </button>
                    </div>-------->
                    <div class="panel-footer " >
                        <p class="card-text text-center" ><strong>{{$ad->description}}</strong></p>
                    </div>
                    <div class="btn-block">
                        <button type="button" class="btn btn-lg btn-info btn-block">Contact the coach</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach