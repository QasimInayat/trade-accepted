<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title') | {{config("app.name")}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/imgs/trade-accepted-favico.png')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @include('partial.styles')
    @stack('styles')
</head>

<body id="mainbody">
    @yield('content')
    @include('partial.header')
    @include('partial.sidebar')
    @include('partial.scripts')
    @stack('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
      var availableTags = [];
        $.ajax({
            method: "GET",
            url: "{{ route('vehicle-list') }}",
            success:function(response){
                // console.log(response);
                startAutoComplete(response);
            },
        });
        function startAutoComplete(availableTags){
            $( ".vehicel-title" ).autocomplete({
                source: availableTags
            });
        }

        function notification(elm,id){
            $.ajax({
                type: 'POST',
                url: 'update-notification/'+id,
                data: {
                    '_token' : "{{csrf_token()}}",
                },
                success: function(response){
                    if(response.status == 400){
                        $.each(response.errors, function (key, err_values){
                            $('#updateform_errList').append('<li>'+err_values+'</li>');
                        });
                    }else if(response.status == 404){
                        toastr.error(response.message);
                    }else{
                        loadnotification();
                        window.location.reload();
                        toastr.success(response.message);
                    }
                }
            });
        }

        loadnotification();
                function loadnotification(){
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('load.notification.data') }}',
                        success:function(response){
                            var response = JSON.parse(response);
                            $('.total_notification').text(response);
                        }
                    });
                }



                function message(elm,id){
            $.ajax({
                type: 'POST',
                url: 'update-message/'+id,
                data: {
                    '_token' : "{{csrf_token()}}",
                },
                success: function(response){
                    if(response.status == 400){
                        $.each(response.errors, function (key, err_values){
                            $('#updateform_errList').append('<li>'+err_values+'</li>');
                        });
                    }else if(response.status == 404){
                        toastr.error(response.message);
                    }else{
                        loadmessage();
                        window.location.reload();
                        toastr.success(response.message);
                    }
                }
            });
        }

        loadmessage();
                function loadmessage(){
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('load.message.data') }}',
                        success:function(response){
                            var response = JSON.parse(response);
                            $('.total_message').text(response);
                        }
                    });
                }
        </script>


</body>

</html>
