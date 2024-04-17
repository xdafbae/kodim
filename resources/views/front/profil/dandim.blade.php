@extends('front.layout.template')

@section('content')
    <div id="" class="area">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="col-xl-11 col-lg-12">
                <div class="testimonial-left-content mt-45">
                    <h4 class="title my-5">Dandim dari Masa<br>Ke masa</h4>


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- testimonial left content -->
            </div>
        </div>
    </div> <!-- row -->
    </div>
@endsection
