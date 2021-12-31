@extends('layouts.main')

@section('title', "Address")

@section('styles')
    @parent

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
      integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" href="/css/signup.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home.css">

    
@endsection

@section('content')
    <!-- login -->
    <section class="sign-up d-flex justify-content-center align-items-center">
      <div class="sign-up-box text-center row mx-4 mb-2 mt-4">
        <div
          class="
            col-md-5
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        >

        <h2>Address</h2>
        <p>Just One Step Away</p>

        </div>
        <div class="col-12 col-sm-10 col-md-7 mt-1 m-auto">
          <form action="" class="">
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Street Address"
            />
            <div class="d-flex justify-content-between name-container">
              <input
                type="text"
                class="form-control w-50 me-3 first-name"
                id="exampleFormControlInput1"
                placeholder="City"
              />
              <input
                type="text"
                class="form-control w-50 last-name"
                id="exampleFormControlInput1"
                placeholder="State"
              />
            </div>

            <div class="password">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Country"
              />
              
            </div>

            <div class="password">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Postal Code"
              />
              
            </div>
            
            <button type="submit" class="btn btn-dark">
              Add Address
            </button>

          </form>
        </div>
      </div>
    </section>
    <!-- scripts -->
@endsection

@section('scripts')
    @parent

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/main.js"></script>
@endsection