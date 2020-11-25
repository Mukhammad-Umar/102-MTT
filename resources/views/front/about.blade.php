@extends('front.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/about.css')}}">
    <style>
      .about_part{
        margin-top: 30px !important;
        text-align: center;
        float: none !important;
        width: 700px !important;
      }
      .about_part span{
        font-size: 25px !important;
      }
      .about_part p{
        font-size: 18px !important;
        color: yellowgreen;
        font-family: cursive;
      }
    </style>
@endsection

@section('main')

	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>B</span>iz
                <span>H</span>aqimizda
            </h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-6 welcome-left">
					<h3>Bizning maqsad</h3>
					<p>Biz sizning farzandingizni kun tartibini kuzatib, sog'lom va quvnoq bo'lib o'sishini diqqat bilan kuzatib boramiz. Biz nafaqat farzandingizning sog'lig'i, balki uning psixologik ahvoli haqida ham qayg'uramiz. Toshkentda bolalar bog'chasini qidirayotgan ota-onalar uchun biz bolalarning bo'sh vaqtini tashkil etishga alohida e'tibor qaratayotganimizni ta'kidlaymiz, chunki toza havoda faol o'yinlar va qo'shma bayramlarda ishtirok etish bolaning sog'lom va barkamol rivojlanishi uchun zarurdir. Eng kichigi uchun bizda ochiq bolalar bog'chalari mavjud, bu erda ko'p yillik tajribaga ega yuqori malakali o'qituvchilar ishlaydi. Bolalar bizga kelganidan xursandlar, chunki bizda dam olish va faol o'yinlar uchun barcha sharoitlar mavjud.</p>
				</div>
				<div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
					<img src="{{ asset('public/img/banner/about-us.jpg')}}" class="img-fluid" alt=" ">
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

@endsection