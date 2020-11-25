
<div class="form-group"><!-- !!!/images/ - custom -->
    <img class="img_product" src="@if(isset($image)){{asset('public/img/slayder/' . $image)}} @elseif(isset($slider)){{asset('public/img/' . $slider->image)}}@elseif(old('image')){{asset('public/img/slayder/' . old('image'))}}@else{{asset('public/img/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
    <!-- not updating image, only creating -->
    @if(Request::is('admin/sliders/create'))
      <form method="post" action="{{ route('slider-upload') }}" name="form_upload" enctype="multipart/form-data">
                  {{ csrf_field() }}
        <input type="file" name="image" class="upload_field">
        <button type="submit" class="upload_submit">Go</button>
        <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Tanlash</button>
      </form>
    @endif
  </div>
  @yield('form-open')
  <input type="hidden" id="image" name="image" value="@if(isset($image)){{'slayder/' . $image}}@elseif(isset($slider)){{$slider->image}}@elseif(old('image')){{old('image')}}@else{{'slayder/nophoto.jpg'}}@endif">
  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title">@lang('Sarlavha')</label>
    <input type="text" class="form-control" id="title" name="title" value="@if(isset($slider)){{$slider->title}}@elseif(old('title')){{old('title')}}@endif" placeholder="Sarlavha | Title" required> 
    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
  </div>