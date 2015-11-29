<!--Top Headerbar area starts -->
<div id="top-bar">
    <h1 class="logo">
        <a href="{!! URL::route('front.index') !!}">Miami Sea Charter</a></h1>
    <a class="mobilemenu">View Menu</a> <a class="bt-menu-trigger" id="menu" onclick="landingpagecube();" href="#">
        <span>Menu</span></a>
</div>
<nav id="menumobile">
    <ul>
        <li><a href="#" onclick="thumbnailscube();">LIFESTYLE</a> </li>
        <li><a href="#" onclick="blogcube()">TRAVEL</a> </li>
        <li><a href="#" onclick="teamcube()">MUSIC</a> </li>
        <li><a href="#" onclick="aboutcube();">ABOUT</a> </li>
        <li><a href="#" onclick="contactcube();">CONTACT</a> </li>
    </ul>
    <div class="footer">
        <ul class="socialpost">
            <li><a class="" href="#"><i class="fa fa-google"></i></a> </li>
            <li><a class="" href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a class="" href="#"><i class="fa fa-behance"></i></a> </li>
        </ul>
        <div class="touch">Miami Sea Charter © {{date('Y')}} All Rights Reserved.</div>
    </div>
</nav>
<!--Top Headerbar area ends -->


