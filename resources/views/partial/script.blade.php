<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('success'))
<script>
    swal("Success","{{ Session::get('success') }}",'success' ,{
     button:true,
     button:"OK",
     timer:3000,
    });
</script>
@endif
@if (Session::has('error'))
<script>
    swal("Error","{{ Session::get('error') }}",'error' ,{
     button:true,
     button:"OK",
     timer:3000,
    });
</script>
@endif
<script>
    //Search Bar
            var searchBar = document.getElementById("express-form-typeahead");
            searchBar.addEventListener('click' , function(){
                var closeSearch = document.getElementById("closeSearch");
                closeSearch.style.display = "block";
            });
            window.addEventListener('mouseup', e =>{
                //alert(e);
                    if(e.target != searchBar && e.target.parentNode != searchBar )
                    {
                        var closeSearch = document.getElementById("closeSearch");
                        closeSearch.style.display = "";
                    }
            });
</script>
    