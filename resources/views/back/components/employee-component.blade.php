
<thead>
  <tr>
    @admin
      <td class="widthbutton">&nbsp;</td>
    @endadmin
    @if (Auth::user()->role == 'redac' || Auth::user()->role == 'admin')
      <td class="widthbutton">&nbsp;</td>
    @endif
    <td>Rasm</td>
    <td>Ism</td>
    <td>Familiya</td>
    <td>Mansabi</td>
    <td>Telefon raqam</td>
    <td>Yaratilingan Sana</td>
  </tr>  
</thead>
<tbody id="pannel" class="back-pannel">
@foreach($employees as $employee)
  <tr>
    @admin
      <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$employee->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    @endadmin
    @if (Auth::user()->role == 'redac' || Auth::user()->role == 'admin')
      <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('employees.edit', $employee->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    @endif
    <td><img src="{{ asset('public/img/' . $employee->image)}}" alt=""></td>
    <td>{{$employee->name}}</td>
    <td>{{$employee->surname}}</td>
    <td>{{$employee->position}}</td>
    <td>{{$employee->telephone}}</td>
    <td>{{$employee->created_at}}</td>
  </tr>
@endforeach