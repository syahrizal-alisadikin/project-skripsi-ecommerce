<nav
class="navbar navbar-expand-lg bg-light navbar-light navbar-store fixed-top navbar-fixed-top"
data-aos="fade-down"
>
<div class="container">
  <a class="navbar-brand" href="/">
    <!-- <img src="/images/logo.svg" alt="" /> -->
  </a>
  {{-- <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation"
  > --}}
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item {{ setActive('/') }}">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item {{ setActive('categories' . '*') }}">
        <a class="nav-link" href="{{ route('categories') }}">Categories</a>
      </li>
      <li class="nav-item {{ setActive('contact') }}">
        <a class="nav-link" href="/contact">Kontak</a>
      </li>
     
      @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Sign Up</a>
            </li>
            <li class="nav-item">
                <a
                class="btn  nav-link px-4 text-white"
                href="{{route('login')}}"
                >Sign In</a
                >
            </li>
        @endguest
    </ul>
    @auth
    <ul class="navbar-nav  d-none d-lg-flex">
           <li class="nav-item dropdown {{ setActive('user') }}">
             <a
               class="nav-link"
               href="{{ route('user.index') }}"
               id="navbarDropdown"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
             >
               {{-- <img
                 src="/images/icon-user.png"
                 alt=""
                 class="rounded-circle mr-2 profile-picture"
               /> --}}
               Hi, {{Auth::user()->name}}
             </a>
           
           </li>
           <li class="nav-item">
             <a class="nav-link d-inline-block" href="{{ route('cart.index') }}">
               @php
                   $carts = App\Models\Cart::where('user_id',Auth::user()->id)->count();
               @endphp
               @if ($carts > 0 )
               <img src="{{ asset('assets') }}/img/icon-cart-filled.svg" alt="">
               <div class="cart-badge">{{$carts}}</div>
               @else
               <img src="{{ asset('assets') }}/img/icon-cart-empty.svg" alt="">
               @endif
             
             </a>
           </li>
          
         </ul>
         <!-- Mobile Menu -->
         <ul class="navbar-nav d-block d-lg-none mt-3">
           <li class="nav-item">
             <a class="nav-link" href="#">
               Hi, {{Auth::user()->name}}
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link d-inline-block" href="#">
               Cart
             </a>
           </li>
         </ul>
@endauth
  </div>
</div>
</nav>

