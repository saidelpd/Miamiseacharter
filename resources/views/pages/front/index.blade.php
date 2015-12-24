@extends('layouts.front')
@section('content')
        <!--Preloader area starts -->
<div class="loader" id="loader"> &nbsp;</div>
<!--Preloader area ends -->
<div id="wraper">
    <a href="#" class="smallimg" id="smallimg">Back</a>
    @include('pages.front.includes._menu')
    @include('pages.front.includes._landing_page')
    @include('pages.front.includes._services')
    @include('pages.front.includes._aboutus')
    @include('pages.front.includes._contact_us')
    @include('pages.front.includes._team')
    @include('pages.front.includes._services_page')

</div>

@endsection
