<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | ME-ngadu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')

</head>

  <body>

    {{-- Hero --}}
<section class=" text-center text-lg-start container">
    <div class="card mb-3">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex">
          <img src="/assets/img/logo.png" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
            <h2 class="fw-bolder">Masuk</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" name="email" class="form-control" :value="old('email')" required autofocus />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" :value="old('password')" required/>
              </div>

              <!-- Submit button -->
              <button type="Submit" class="btn btn-primary btn-block mb-4">Masuk</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->


  @include('includes.landing.javascript')

</body>

</html>
