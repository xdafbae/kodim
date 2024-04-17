@extends('front.layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                            alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, eligendi!
                            Dicta praesentium amet voluptas quidem natus. Sint, ratione animi dolorum aliquid nesciunt porro
                            quidem laboriosam corrupti cupiditate, sapiente fuga necessitatibus voluptatibus tempora at illo
                            rerum? Sint aut quibusdam corporis deleniti. Consequuntur possimus perferendis deserunt ad odio.
                            Nostrum nisi reiciendis non amet perferendis fuga inventore obcaecati eos quidem, eligendi culpa
                            repudiandae. Alias laboriosam laudantium porro eum quia assumenda, error ullam laborum voluptate
                            quam provident commodi consequuntur, necessitatibus debitis veniam nostrum sequi corrupti harum
                            quis quasi! Minus eveniet, itaque expedita saepe error natus rem inventore. Veniam ex,
                            doloremque, quis atque sit impedit dolore dolores similique, facilis commodi aut dolor quod id
                            at sequi ipsum? Voluptate facere aperiam ipsa voluptatem doloremque magnam eveniet a autem
                            necessitatibus quo. Dolores velit perferendis maiores. Nihil esse doloremque quia ducimus
                            aliquid ex excepturi atque delectus magni nostrum incidunt, nesciunt commodi molestias iste
                            molestiae ut voluptate! Ipsa sint soluta voluptate consequuntur, dignissimos placeat! Officia
                            minus beatae molestiae nihil non odit obcaecati, quos esse magnam? Voluptatem, quaerat
                            perferendis architecto eius placeat corrupti, officia laborum rerum iste et libero vero ratione,
                            nihil delectus. Itaque perspiciatis, provident tempora dolorem ipsa laudantium saepe aspernatur
                            veniam nulla est fugit cumque temporibus ab dolor.</p>

                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
