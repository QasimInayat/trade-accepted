<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
    .custom-search{position: relative;right:-12px;}
    #express-form-typeahead{background-color:transparent;background-image:url({{asset('assets/imgs/fi_search.svg')}});background-position:5px center;background-repeat:no-repeat;background-size:15px;border:none;cursor:pointer;height:30px;padding:0 0 0 34px;position:relative;-webkit-transition:width 1.1s ease, background 1.1s ease;transition:width 1.1s ease, background 1.1s ease;width:0;}
    .close-search{display:none;-webkit-animation: fadeEffect1 2s;animation: fadeEffect1 2s;
    position: absolute;top:9px;right:9px;background-image: url({{ asset('assets/imgs/cross.png') }});width: 15px;
    height: 15px;background-repeat: no-repeat;background-size: 15px;}
    #express-form-typeahead:focus{background-color:#fff;border-bottom:1px solid #e7e7e7;cursor:text;outline:0;width:200px;border-radius: 0;}
    .search-btn{display:none;}
    input[type="search"]{-webkit-appearance:textfield;}
   /* Fade in tabs */
    @-webkit-keyframes fadeEffect1 {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes fadeEffect1 {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    .dropdown-item:active {
    color: black;
    text-decoration: none;
    background-color: rgb(233 ,236 ,239);
}
</style>