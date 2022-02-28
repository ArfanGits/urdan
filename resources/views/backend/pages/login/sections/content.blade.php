<div class="content">
    <div class="brand">
        <a class="link" href="{{route('home')}}">Urdan Admin Panel</a>
    </div>
    <form action="{{route('login')}}" method="post">
        @csrf
        <h2 class="login-title">Log in</h2>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-info btn-block" type="submit">Login</button>
        </div>
        <div class="text-center">Not a member?
            <a class="color-blue" href="{{route('register')}}">Create account</a>
        </div>
    </form>
</div>
<!-- BEGIN PAGE BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGE BACKDROPS-->