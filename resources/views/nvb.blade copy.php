<nav class="navbar navbar-expand-lg navbar-light position-sticky" style="padding-top:25px;">
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
        <!--Signin-up button -->
        <div class="float-right text-white" style="margin-right:30px;">
        <form class="form-inline d-flex justify-content-right" action="{{url('/login')}}" method="post">
        {{csrf_field()}}
            <div class="form-group mb-2">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-warning" style="height:38px" title="Register Here">Sign in</button>
        </form>
        </div>
</nav>