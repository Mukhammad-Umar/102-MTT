@extends('front.layout')

    @section('css')
        <style>
            .spad {  padding-top: 70px;
                padding-bottom: 70px; }
            .spad .about-text{ margin-top: 100px; }
            .spad .about-text h3{ font-size: 30px;
                font-family: cursive;
                margin-bottom: 10px; }
            .spad .about-text p a{ float: none; }
        </style>
    @endsection

@section('main')

	<!-- Intro Section end -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-lg-2 admission-image">
					<img src="{{ asset('public/img/gallery/pic1.jpg')}}" alt="">
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="about-text">
						<h3>QABUL JARAYONI</h3>
						<p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                            Bog`chaga 3 yoshdan 7 yoshgacha bo`lgan bolalar qabul qilinadi
                        </p>
						<p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                            Hujjat topshirish ishlari davlat xizmatlari markazlari orqali va
                        </p>
						<p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                            <a href="https://my.gov.uz/oz/service/285" target="_blank">my.gov.uz</a> sayti orqali amalga oshirishingiz mumkin
                        </p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- Intro Section end -->
    
@endsection