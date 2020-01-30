@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Edit Blog Post</h4>
            </div>
            <div class="card-body">
        @if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
           
                <form class="form-horizontal" method="POST" action="{{ url('/edit',
                array($blog->id)) }}"
                 enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Blog Title</label>

                           
                                <input id="blog_title" type="text" class="form-control" name="blog_title"
                                 value="{{ $blog->blog_title }}"autofocus >

                                @if ($errors->has('blog_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blog_title') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                            <label for="image_url" class="col-md-4 control-label">Image_Url</label>

                          
                                <input id="image_url" type="text" class="form-control" name="image_url"
                                 value="{{$blog->image_Url}}" autofocus>

                                @if ($errors->has('image_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_url') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        
                           

                            <div class="form-group{{ $errors->has('story') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Write Here:</label>

                           
                                <textarea id="story"  rows="12" type="text" class="form-control" 
                                name="story"
                                 value="{{ $blog->story }}"  autofocus>{{ $blog->story }}</textarea>

                                @if ($errors->has('story'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('story') }}</strong>
                                    </span>
                                @endif
                           
                            </div>

                
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Edit Blog 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
