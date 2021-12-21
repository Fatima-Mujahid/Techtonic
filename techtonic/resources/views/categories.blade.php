@extends('layouts.app')

@section('title', 'Categories')

@section('styles')
    @parent

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/categories.css">
@endsection

@section('content')
    <div id="categories">
        <div class="gap">
            <h1 class="page-title text-center">Categories</h1>
            <p class="page-subtitle text-center">Furnishing your every Desire</p>
        </div>

        <div class="category-row">
            <h1 class="category-title text-center">Smartphones</h1>
            <p class="category-subtitle text-center">From luxury to necessity</p>
            <p class="browse text-end"><a href="#">Browse our Collection <i class="bi bi-chevron-right"></i></a></p>

            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1578840602674-bd891cb7ea5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Harry Winston HTC Desire</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1505739648877-581d0adc9fd3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Harry Winston HTC Desire</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1578840602674-bd891cb7ea5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Caviar iphone 11 Pro Max</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <p class="browse-md text-center"><a href="#">Browse our Collection <i
                        class="bi bi-chevron-right"></i></a>
            </p>
        </div>

        <div class="category-row">
            <h1 class="category-title text-center">Watches</h1>
            <p class="category-subtitle text-center">The essence of time</p>
            <p class="browse text-end"><a href="#">Browse our Collection <i class="bi bi-chevron-right"></i></a></p>

            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1548169874-53e85f753f1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=710&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Harry Winston HTC Desire</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1600003014608-c2ccc1570a65?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=380&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Harry Winston HTC Desire</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1548171838-1fd4cb4ab854?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Caviar iphone 11 Pro Max</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <p class="browse-md text-center"><a href="#">Browse our Collection <i
                        class="bi bi-chevron-right"></i></a>
            </p>
        </div>

        <div class="category-row">
            <h1 class="category-title text-center">Fragrances</h1>
            <p class="category-subtitle text-center">Alluring elegance</p>
            <p class="browse text-end"><a href="#">Browse our Collection <i class="bi bi-chevron-right"></i></a></p>

            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Harry Winston HTC Desire</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1557170334-a9632e77c6e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Harry Winston HTC Desire</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card text-white">
                        <img src="https://images.unsplash.com/photo-1561997835-49889d0e0355?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Caviar iphone 11 Pro Max</h5>
                            <a href="#">Explore <i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <p class="browse-md text-center"><a href="#">Browse our Collection <i
                        class="bi bi-chevron-right"></i></a>
            </p>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
@endsection