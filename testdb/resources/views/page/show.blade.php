@extends('layout.main')

@section('page-title', $product->name)

@section('page-content')

    <div class="container">
        <div class="row">
            <div class="col-4 text-dark border border-3">
                <h1>{{ $product->name }}</h1>
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                <h5 class="text-muted">{{ $product->price }}</h5>
            </div>
            <div class="col-8 text-dark">
                <form action="">
                    <legend>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus nulla in justo congue rhoncus.
                        In pulvinar dolor eu est tincidunt interdum.
                        Etiam venenatis, risus in varius facilisis, nunc sapien molestie tortor, a vulputate erat diam et tortor.
                        Duis non lacus orci. In a lorem at odio aliquet sollicitudin quis at nisi.
                        Cras varius diam quam, quis mollis lorem tristique non. Nulla ut velit vel ligula ullamcorper aliquet et vitae odio.
                        Quisque laoreet, elit a posuere laoreet, ex odio feugiat nisl, et porttitor sem justo pulvinar dui.
                        Sed nisl lorem, malesuada et viverra sed, congue et ipsum. Mauris mattis nulla non porttitor imperdiet.
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Praesent porttitor id urna ut lobortis. Vestibulum lacinia id purus nec malesuada.
                        Sed ut ipsum rutrum, facilisis arcu ac, convallis odio.</legend>
                </form>
            </div>
        </div>
    </div>

@endsection
