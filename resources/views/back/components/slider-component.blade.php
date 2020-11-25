
<thead>
  <tr>
    @admin
      <td class="widthbutton">&nbsp;</td>
    @endadmin
    <td>Rasm</td>
    <td>Mavzu</td>
  </tr>
</thead>
<tbody id="pannel" class="back-pannel">
@foreach($sliders as $slider)
  <tr>
    @admin
      <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$slider->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    @endadmin
    {{-- <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('sliders.edit', $slider->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td> --}}
    <td><img src="{{ asset('public/img/' . $slider->image)}}" alt=""></td>
    <td>{{$slider->title}}</td>
  </tr>
@endforeach