
<div class="wrap navbar container mt-5">
    <img src="{{URL::asset('/uploads/logo.jpg')}}" height="100px" width="100px" alt="logo">
    <div class="navbar-right">
        <a href="/menu" class="btn text-dark">Welcome : {{session('sid')[0]->email}}</a>
        <a href="/menu" class="btn text-dark">Menu</a>
        <a href="/cart" class="btn text-dark">Cart({{session('count')}})</a>
        <a href="profile/{{session('sid')[0]->id}}" class="btn text-dark">Profile</a>
        <a href="logout" class="btn bg-dark text-light">Logout</a>
    </div>
</div>
