
<thead>
  <tr>
    <td class="col-6"></td>
    @admin
    <td class="widthbutton col-3">&nbsp;</td>
    @endadmin
    <td class="col-3">Rasm</td>
    <td class="col-6"></td>
  </tr>  
</thead>
<tbody id="pannel" class="back-pannel">
@foreach($galleries as $gallery)
  <tr>
    <td></td>
    @admin
      <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$gallery->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    @endadmin
    {{-- <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('galleries.edit', $gallery->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td> --}}
    <td><img src="{{ asset('public/img/' . $gallery->image)}}" alt=""></td>
  </tr>
@endforeach