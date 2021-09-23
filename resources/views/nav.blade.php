@auth
    <nav class="d-flex navbar navbar-expand-lg navbar-light sticky-position" style="top:0;">
            <a  data-toggle="tooltip" data-placement="bottom" title="Go to iMAiL Home Page" class="navbar-brand" href="#" style="font-family: TW Cen MT;font-size:2em;color:#bdc2ac;margin-top:1rem;margin-left:100px;">
                <img style="-webkit-filter: invert(1);filter: invert(1);" src="https://i.ibb.co/MBSwXG3/dad.png" width="40" height="40" class="d-inline-block align-top" alt="">
                &nbsp;GDMOTORS
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;" href="/home"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;"  href="#"></a>
            </li>
            </ul>
        </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-light" style="margin-right:30px;">Logout {{ Auth::user()->name}}</button>
                </form>
    </nav>
@endauth 
@guest
    <nav class="navbar navbar-expand-lg navbar-light" style="position:sticky;position: -webkit-sticky;top:0;">
        <a  data-toggle="tooltip" data-placement="bottom" title="Go to iMAiL Home Page" class="navbar-brand" href="{{url('/')}}" style="font-family: TW Cen MT;font-size:2em;color:#bdc2ac;margin-top:1rem;margin-left:100px;">
            <img style="-webkit-filter: invert(1);filter: invert(1);" src="https://i.ibb.co/MBSwXG3/dad.png" width="40" height="40" class="d-inline-block align-top" alt="">
            &nbsp;GDMOTORS
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family: Tw Cen MT;font-size:25px; margin-right: 20px; margin-top:20px; color:#E5E8E8;"  href="#">FAQs</a>
            </li>
            </ul>
        </div>
    </nav>
@endguest