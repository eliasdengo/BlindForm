<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="col-6 offset-3">
                    <div class="card">
                        <div class="card-header">
                            Chat Room
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" id="name">
                            </div>

                            <div class="form-group" id="data-message">

                            </div>
                            <div class="form-group">
                                <textarea id="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-success"> Send </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery.3.3.1.slim.min.js"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"/>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"/>
        <script src="{{ url('js/app.js') }}"></script>
        <script>
            $(function(){
                const Http= window.axios;
                const Echo= window.Echo;
                const name=$("#name");
                const message=$('message');

                $("input, textarea").keyup(function(){
                    $(this).removeClass('is.invalid');
                });

                $('button').click(function(){
                    if(name.val()==''){
                        name.addclass('is-invalid');
                    }else if(message.val()==''){
                        message.addclass('is-invalid');
                    }else{
                        Http.post("{{ url('send') }}", {
                            'name' : name.val(),
                            'message': message.val(),

                        }).then(()=>{
                            message.val('');
                        });
                    }
                });
              let channel=Echo.channel('channel-chat');
              channel.listen('ChatEvent', function(data){
                $('#data-message')
                .append('<strong>${data.message.name}</strong> : ${data.message.message}<br>');
              })

            })
        </script>
    </body>
</html>
