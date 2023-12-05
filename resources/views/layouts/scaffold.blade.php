<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{config("app.name")}} | @stack('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('asset/img/trade-accepted-favico.png')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @include('partial.styles')
    @stack('styles')
</head>

<body>
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
            $( "#express-form-typeahead" ).autocomplete({
                source: availableTags
            });
        }
    
                    $(document).on('click' , '.seen_notification' , function (e){
                e.preventDefault();
                var notification_id = $('#edit_notification_id').val();
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                type: 'PUT',
                url: 'update-notification/'+notification_id,
                dataType: 'json',
                success: function(response){
                    if(response.status == 400){
                        $.each(response.errors, function (key, err_values){
                            $('#updateform_errList').append('<li>'+err_values+'</li>');
                        });
                    }else if(response.status == 404){
                        toastr.error(response.message);
                    }else{
                        toastr.success(response.message);
                    }
                }
              });
          });
    
        </script>
    
</body>

</html>
