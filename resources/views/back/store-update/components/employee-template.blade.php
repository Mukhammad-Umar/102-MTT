
<div class="form-group"><!-- !!!/images/ - custom -->
    <img class="img_product" src="@if(isset($image)){{asset('public/img/employees/' . $image)}} @elseif(isset($employee)){{asset('public/img/' . $employee->image)}}@elseif(old('image')){{asset('public/img/employees/' . old('image'))}}@else{{asset('public/img/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
    <!-- not updating image, only creating -->
    @if(\Request::is('admin/employees/create'))
      <form method="post" action="{{ route('employee-upload') }}" name="form_upload" enctype="multipart/form-data">
                  {{ csrf_field() }}
        <input type="file" name="image" class="upload_field">
        <button type="submit" class="upload_submit">Go</button>
        <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Tanlash</button>
      </form>
    @endif
  </div>
  @yield('form-open')
  <input type="hidden" id="image" name="image" value="@if(isset($image)){{'employees/' . $image}}@elseif(isset($employee)){{$employee->image}}@elseif(old('image')){{old('image')}}@else{{'employees/nophoto.jpg'}}@endif">
  <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name">@lang('Ism')</label>
    <input type="text" class="form-control" id="name" name="name" value="@if(isset($employee)){{$employee->name}}@elseif(old('name')){{old('name')}}@endif" placeholder="Ism" required> 
    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
  </div>
  <div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
    <label for="surname">@lang("Familiya")</label>
    <input type="text" class="form-control" id="surname" name="surname" value="@if(isset($employee)){{$employee->surname}}@elseif(old('surname')){{old('surname')}}@endif" placeholder="Familiya" required> 
    {!! $errors->first('surname', '<small class="help-block">:message</small>') !!}
  </div>
  <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
    <label for="position">@lang("Mansabi")</label>
    <input type="text" class="form-control" id="position" name="position" value="@if(isset($employee)){{$employee->position}}@elseif(old('position')){{old('position')}}@endif" placeholder="Mansabi" required> 
    {!! $errors->first('position', '<small class="help-block">:message</small>') !!}
  </div>
  <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
    <label for="telephone">@lang("Telefon nomer")</label>
    <input type="text" class="form-control" id="telephone" name="telephone" value="@if(isset($employee)){{$employee->telephone}}@elseif(old('telephone')){{old('telephone')}}@endif" placeholder="Telefon nomer" required>
    {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
  </div>