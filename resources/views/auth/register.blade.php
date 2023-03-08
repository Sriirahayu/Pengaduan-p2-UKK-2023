<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | ME-ngadu</title>
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
          <img src="assets/img/logo.png" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
            <h2 class="fw-bolder">Daftar</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf
              <!-- Email input -->
              <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik" :value="old('nik')" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name" :value="old('name')" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" :value="old('email')" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">No Telpon</label>
                <input type="phone" class="form-control" id="phone" placeholder="Masukkan No Telpon" name="phone" :value="old('phone')" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required autocomplete="new-password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" placeholder="Masukkan Ulang Password" name="password_confirmation" required>
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
