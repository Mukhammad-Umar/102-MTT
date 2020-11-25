@extends('front.layout')

    @section('css')
        <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox.min.css')}}" media="screen">
        <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox.css')}}" media="screen">
        <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox-buttons.css')}}" media="screen">
        <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox-thumbs.css')}}" media="screen">
        <link rel="stylesheet" href="{{ asset('public/css/gallery.css')}}">
    @endsection

    @section('main')

    <!-- Page Content -->
    <div class="container page-top">
        <h3 class="gellery_title">Galleriya</h3>
        <div class="row">
            @foreach($photos as $photo)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('public/img/' . $photo->image)}}" class="fancybox-buttons" rel="ligthbox">
                        <img src="{{ asset('public/img/' . $photo->image)}}" alt="Photo">
                    </a>
                </div>
            @endforeach
       </div>
    </div>

    @endsection

    @section('js')

    @endsection