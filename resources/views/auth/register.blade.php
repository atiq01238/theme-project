<!DOCTYPE html>
<html lang="en">

<head>
  {{-- @@include("../../partials/head/head-meta.html") --}}
  @include('layout.head-links')
  <title>Sign Up | Dasher - Responsive Bootstrap 5 Admin Dashboard</title>
  {{-- @@include("../../partials/head/head-links.html") --}}
    @include('layout.head-links')

</head>

<body>
  <main class="d-flex flex-column justify-content-center vh-100">
    <!--Sign up start-->
    <section>
      <div class="container">
        <div class="row mb-8">
          <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
            <div class="text-center">
              <a href="/"
                class="fs-2 fw-bold d-flex align-items-center gap-2 justify-content-center mb-6">
                <img src="@@webRoot/assets/images/brand/logo/logo-icon.svg" alt="" />
                <span>Dasher</span>
              </a>
              <h1 class="mb-1">Create Account</h1>
              <p class="mb-0">Sign up now and get free account instant.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 col-12">
            <div class="card shadow-sm mb-4">
              <div class="card-body p-6">
                @if ($errors->any())
                  <div class="card border-danger shadow-sm mb-4">
                      <div class="card-header bg-danger text-white">
                          ⚠️ Please fix the following errors
                      </div>
                      <div class="card-body">
                          <ul class="mb-0">
                              @foreach ($errors->all() as $error)
                                  <li class="text-danger">{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  </div>
                  @endif
                <form class="needs-validation mb-6" novalidate method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="signupFullnameInput" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    <div class="invalid-feedback">Please enter full name</div>
                  </div>

                  <div class="mb-3">
                    <label for="signupEmailInput" class="form-label">
                      Email
                      <span class="text-danger">*</span>
                    </label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">Please enter email.</div>
                  </div>
                  <div class="mb-3">
                    <label for="formSignUpPassword" class="form-label">Password</label>
                    <div class="password-field position-relative">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                      <span><i class="ti ti-eye-off passwordToggler"></i></span>
                      <div class="invalid-feedback">Please enter password.</div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="formSignUpConfirmPassword" class="form-label">Confirm Password</label>
                    <div class="password-field position-relative">
                      <input type="password" class="form-control fakePassword" name="password_confirmation" id="formSignUpConfirmPassword"
                        required />
                      <span><i class="ti ti-eye-off passwordToggler"></i></span>
                      <div class="invalid-feedback">Please enter password.</div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="signupCheckTextCheckbox" />
                        <label class="form-check-label ms-2" for="signupCheckTextCheckbox">
                          <a href="#">Terms of Use</a>
                          &
                          <a href="#">Privacy Policy</a>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                  </div>
                </form>

                
              </div>
            </div>
            <span>
              Already have an account?
              <a href="/auth/login" class="text-primary">Sign in here.</a>
            </span>
          </div>
        </div>
      </div>
    </section>
    <!--Sign up end-->
    <div class="position-absolute end-0 bottom-0 m-4">
      <div class="dropdown">
        <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button"
          aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
          <i class="bi theme-icon-active lh-1"><i class="bi theme-icon bi-sun-fill"></i></i>
          <span class="visually-hidden bs-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
              aria-pressed="true">
              <i class="ti theme-icon ti ti-sun"></i>
              <span class="ms-2">Light</span>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
              aria-pressed="false">
              <i class="ti theme-icon ti-moon-stars"></i>
              <span class="ms-2">Dark</span>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
              aria-pressed="false">
              <i class="ti theme-icon ti-circle-half-2"></i>
              <span class="ms-2">Auto</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </main>

  @@include("../../partials/scripts.html")
  <script src="@@webRoot/assets/js/vendors/password.js"></script>
</body>

</html>