@include('head')
<body style="background-color: @include('color');">
@include('bg')
@include('nvb')
    <img style="-webkit-filter: invert(1);filter: invert(1);" src="https://i.ibb.co/MBSwXG3/dad.png" class="rounded mx-auto d-block img-fluid mt-5" width="100" height="100" alt="">
            <div class="containter text-white text-center" style="font-family: Tw Cen MT;font-size:50px;">
                <p>Home of best brand new quality cars </p><p style="font-size:70px;color:#F3C700">GDMOTORS</p>
                <a type="button" href="{{url('/register')}}" class="btn btn-outline-primary btn-lg" style="width:350px;font-size:30px;"  data-toggle="tooltip" data-placement="bottom" title="Register Here">Sign-up</a>
            </div>
    <br><br><br><br>
    </div>
</body>
@include('foot')