@extends('front.layout.template')

@section('content')
    {{-- <section id="services" class="features-area"> --}}
    <style>
        .galery-item {
            width: 200px;
            padding: 5px;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12 mb-2">
            <div class="single-features ">

                <div class="features-content ">
                    <h3 class="f1-l-3 cl2 p-b-16  respon2" style="text-align: center">
                        Galeri
                    </h3>

                    <div class="container text-center mt-4">
                        <div class="row row-cols-2">
                            @for ($i = 0; $i < 20; $i++)
                                <img src="https://amanahnews.com/assets/berita/original/94280346017-screenshot_20210324_151623.jpg"
                                    class="gallery-item w-25 mt-4" alt="...">
                            @endfor
                        </div>


                    </div>

                </div> <!-- single features -->
            </div>
        @endsection
