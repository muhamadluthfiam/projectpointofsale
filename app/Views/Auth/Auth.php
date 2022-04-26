<?= $this->extend('Authlayout/template'); ?>

<?= $this->section('Auth'); ?>
<div id="app">
  <section class="section">
    <div class="flex-wrap d-flex align-items-stretch">
      <div class="order-2 bg-white col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100">
        <div class="p-4 m-3">
          <img src="../assets/img/stisla-fill.svg" alt="logo" width="80" class="mt-2 mb-5 shadow-light rounded-circle">
          <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Stisla</span></h4>
          <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>
          <form id="login">
            <div class="form-group">
              <label for="username">Username</label>
              <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
              <div class="invalid-feedback" id="invalidUsername">
              </div>
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
              <input id="password" type="password" class="form-control" name="password" tabindex="2">
              <div class="invalid-feedback" id="invalidPassword">
              </div>
            </div>



            <div class="text-right form-group">
              <a href="auth-forgot-password.html" class="float-left mt-3">
                Forgot Password?
              </a>
              <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                Login
              </button>
            </div>

            <div class="mt-5 text-center">
              Don't have an account? <a href="auth-register.html">Create new one</a>
            </div>
          </form>

          <div class="mt-5 text-center text-small">
            Copyright &copy; Your Company. Made with 💙 by Stisla
            <div class="mt-2">
              <a href="#">Privacy Policy</a>
              <div class="bullet"></div>
              <a href="#">Terms of Service</a>
            </div>
          </div>
        </div>
      </div>
      <div class="order-1 col-lg-8 col-12 order-lg-2 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/unsplash/login-bg.jpg">
        <div class="absolute-bottom-left index-2">
          <div class="p-5 pb-2 text-light">
            <div class="pb-3 mb-5">
              <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
              <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
            </div>
            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>