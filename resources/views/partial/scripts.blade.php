
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
    }
    @if(Session::has('success'))
        toastr.success("{{ session('success') }}")
    @endif
  </script>
  <script>
    toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
    }
    @if(Session::has('error'))
        toastr.error("{{ session('error') }}")
    @endif
  </script>
