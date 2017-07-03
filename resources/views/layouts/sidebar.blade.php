<div class="col-sm-3 sidenav">
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ url('user/profile/'.Auth::user()->id.'/index')}}"><b>Quản lý tài khoản</b></a></li>
        <li><a href="{{ url('user/shop/'.Auth::user()->id.'/index')}}"><b>Quản lý shop</b></a></li>
    </ul>
</div>