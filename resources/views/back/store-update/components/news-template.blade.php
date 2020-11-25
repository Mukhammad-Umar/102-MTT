
<div class="form-group"><!-- !!!/images/ - custom -->
    <img class="img_product" src="@if(isset($image)){{asset('public/img/news/' . $image)}} @elseif(isset($news)){{asset('public/img/' . $news->image)}}@elseif(old('image')){{asset('public/img/news/' . old('image'))}}@else{{asset('public/img/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
    <!-- not updating image, only creating -->
    @if(\Request::is('admin/news/create'))
        <form method="post" action="{{ route('news-upload') }}" name="form_upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
            <input type="file" name="image" class="upload_field">
            <button type="submit" class="upload_submit">Go</button>
            <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Tanlash</button>
        </form>
    @endif
</div>
@yield('form-open')
<input type="hidden" id="image" name="image" value="@if(isset($image)){{'news/' . $image}}@elseif(isset($news)){{$news->image}}@elseif(old('image')){{old('image')}}@else{{'news/nophoto.jpg'}}@endif">
{{-- <div class="form-group">
    <div class="custom-file">   
        <label class="custom-file-label" for="image">Rasm</label>
        <input type="file" class="custom-file-input" id="image" name="image">
    </div>
</div> --}}
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title">@lang('Sarlavha')</label>
    <input type="text" class="form-control" id="title" name="title" value="@if(isset($news)){{$news->title}}@elseif(old('title')){{old('title')}}@endif" placeholder="Sarlavha | Title" required> 
    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
</div>
<div class="form-group {{ $errors->has('information') ? 'has-error' : '' }}">
    <label for="information">@lang("Ma'lumot")</label>
    <input type="text" class="form-control" id="information" name="information" value="@if(isset($news)){{$news->information}}@elseif(old('information')){{old('information')}}@endif" placeholder="Information" required> 
    {!! $errors->first('information', '<small class="help-block">:message</small>') !!}
</div>