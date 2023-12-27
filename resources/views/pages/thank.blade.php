@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
<style>
    @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
    @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
</style>
@endpush
@section('content')
<div style="margin-bottom: 105px;"></div>
    <div class="text-center" id="header">
        <h1 style="font-size: 100px;" class="">THANK YOU!</h1>
        <i style=" margin-top: -50px; font-size: 150px;" class="text-primary fa fa-check main-content__checkmark" id="checkmark"></i>
    </div>
    
    <div class="text-center mb-5">
        <b class="">It means a lot to us, just like you do! We really appreciate you giving us a moment of your <br> time today. Thanks for your support.</b><br><br>
        <a href="{{ route('index') }}" class="btn btn-primary">Back to home</a>
    </div>
@endsection