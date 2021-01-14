<!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Surat Gampong - Login</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="staradmin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="staradmin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
      <link rel="stylesheet" href="staradmin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="staradmin/assets/vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="staradmin/assets/vendors/css/vendor.bundle.addons.css">
      <!-- endinject -->
      <!-- plugin css for this page -->
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="staradmin/assets/css/shared/style.css">
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="staradmin/assets/css/demo_1/style.css">
      <!-- End Layout styles -->
      <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}" />
      </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="password" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" name="remember" id="remember"> Keep me signed in </label>
                    </div>
                    
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Belum Mendaftar ?</span>
                    <a href="{{ route('register') }}" class="text-black text-small">Daftar disini</a>
                  </div>
                </form>
              </div>
              
              <p class="footer-text text-center mt-4">copyright © 2020 Sayuthii & Farhan Studio. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="staradmin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="staradmin/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="staradmin/assets/js/shared/off-canvas.js"></script>
    <script src="staradmin/assets/js/shared/misc.js"></script>
    <!-- endinject -->
  </body>
</html>