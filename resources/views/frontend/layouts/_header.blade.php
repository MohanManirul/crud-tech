<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="{{ route('/') }}">Lonely</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>
    <div class="mt-3 mt-lg-0">
      <h2>Welcome to user dashboard</h2>
    </div>
    <div style="float: right">
      <a  href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout"> <button class="btn btn-danger" >{{ __('Logout') }}</button> </span></a>
      <form action="{{ route('logout') }}" id="logout-form" style="display: none;" method="post">@csrf</form>
  </div>

  </div>
  <hr>