@include('layouts.header')

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
  <div class="text-center">
    <a href="index.html" class="logo"><span>SI Warehouse <span>Terpadu</span></span></a>
    <h5 class="text-muted m-t-0 font-600">PT. Sejahtera Mandiri Pekanbaru</h5>
  </div>
  <div class="m-t-40 card-box">
    <div class="text-center">
      <img src="{{asset('adminto/images/brand/sejahtera.png')}}" height="100px" alt="">
      <h4 class="text-uppercase font-bold m-b-0">Masukkan Kata Sandi Baru</h4>

    </div>

    <div class="p-20">
      @if(\Session::has('alert'))
      <div class="alert alert-danger">
        <div>{{Session::get('alert')}}</div>
      </div>
      @endif

      @if(\Session::has('success'))
      <div class="alert alert-success">
        <div>{{Session::get('success')}}</div>
      </div>
      @endif
      <form method="POST" action="{{ route('password.ubah') }}">
        @csrf

        <div class="form-group">
          <div class="col-xs-12">
            <input type="hidden" value="{{$token}}" name="token">

            <input id="password" placeholder="Kata Sandi" type="password" class="form-control @error('password') is-invalid @enderror" name="password" data-toggle="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="form-group text-center m-t-30">
          <div class="col-xs-12">
            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Ubah Kata Sandi</button>
          </div>
        </div>


      </form>


    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 text-center">
      <p class="text-muted">Batalkan? <a href="{{route('/')}}" class="text-primary m-l-5"><b>Masuk</b></a></p>
    </div>
  </div>


</div>
<!-- end wrapper page -->



@include('layouts.footer')