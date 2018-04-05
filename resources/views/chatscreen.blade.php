@extends('layouts.app')

@section('content')

    <div class="container">


        <div id="message_log">

            <ul id="message_log_list">

            </ul>

        </div>


            {{ Form::open(["action" => 'ChatController@storeMessage', 'method' => 'POST', 'id' => 'comment']) }}


            <div class="form-group">
                {{Form::label('message','Message')}}
                {{Form::text('message','',['class' => 'comment_text','placeholder' => 'message'])}}
            </div>

            {{ Form::hidden('chat_id', $chat_id, ['id' => 'chat_id'])}}


            {{ Form::close() }}

    </div>

    <script>

        $(document).ready(function(){

            getMessage();

            setInterval(function(){
                getMessage();
            },1000);

            $('#comment').submit(function(e){

                e.preventDefault();

                var chat_id = $('#chat_id').val();
                var message = $('.comment_text').val();

                $.ajax({
                    type: "POST",
                    url: '/new-message',

                    data: {'chat_id' : chat_id,
                            'message' : message
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result){
                    }
                });

                getMessage();

            });

            function getMessage(){

                var chat_id = $('#chat_id').val();

                     $.ajax({
                         type: "GET",
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         },
                         url: '/chat/ajaxLoad/' + chat_id,

                         success: function(data){
                             console.log(data);
                             $('#message_log_list').html('');
                             $.each(data, function() {
                                 $.each(this, function(k, v) {
                                     if(k === 'sender'){
                                         console.log('{{Auth::user()->name}}')
                                         if(v === '{{Auth::user()->name}}'){
                                             $('#message_log_list').append('<li style="color:blue"><b>' + v + '</b></li>');
                                         }
                                         else{
                                             $('#message_log_list').append('<li><b>' + v + '</b></li>');

                                         }
                                     }
                                     else{
                                         $('#message_log_list').append('<li>' + v + '</li>');
                                     }
                                 });
                             });


                         },

                     });

            }
        })


    </script>


@endsection
