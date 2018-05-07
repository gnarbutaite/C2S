


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">

                <select name="subjectfilter" id="subjectfilter">

                    <option value="French">French</option>
                    <option value="Math">Math</option>

                </select>
            </div>
            @include('layouts.post')
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

        $('#subjectfilter').change(function() {

            var subject = $('#subjectfilter').val();
            //alert(subject)
            getFiltered(subject);
        });

        function getFiltered(subject){

            $.ajax({
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/advertisement/filter/' + subject,

                success: function(data){
                    console.log(data);

                    var content = '';
                    for(i=0;i<data.length;i++){

                        var item = data[i];
                         content += '<div class="card-header"><h1>'+item['title'] +'</h1></div>';
                         content += '<img src="/uploads/avatars/'+item['avatar']+'"/>';
                         content += '<h1>'+item['name']+'</h1>';
                         content += '<p>'+item['description']+'</p>';
                         content += '<form action="/new-chat" method="post">{{ csrf_field() }}' +
                             '<input name="coach_id" type="hidden" value="'+item['user_id']+'">' +
                             '<input name="ad_id" type="hidden" value="'+item['ad_id']+'"> ' +
                             '<input type="submit" value="chat">'+
                             '</form>';
                    }

                    //alert(content);
                    $('.card').html(content);


                },

            });

        }

    });




</script>

@endsection
