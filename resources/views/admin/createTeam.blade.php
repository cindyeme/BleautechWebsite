@extends('layouts.admin')

@section('content')
<div class="container">
<div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Add Team Member</h4>
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
           
                <form class="form-horizontal" method="POST" action="{{url('/addTeam')}}"
                 enctype = "multipart/form-data" >
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="Name" class="col-md-4 control-label">Name</label>

                           
                                <input id="name" type="text" class="form-control" name="name"
                                 value="{{ old('name') }}"autofocus >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          
                        </div>


                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Title</label>

                            
                                <input id="title" type="text" class="form-control" name="title"
                                 value="{{ old('title') }}"autofocus >

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                            <label for="twitter" class="col-md-4 control-label">Twitter Handle</label>

                            
                                <input id="twitter" type="text" class="form-control" name="twitter"
                                 value="{{ old('twitter') }}"autofocus >

                                @if ($errors->has('twitter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                            <label for="linkedin" class="col-md-4 control-label">linkedin Handle</label>

                            
                                <input id="linkedin" type="text" class="form-control" name="linkedin"
                                 value="{{ old('linkedin') }}"autofocus >

                                @if ($errors->has('linkedin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                        <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                            <label for="instagram" class="col-md-4 control-label">instagram Handle</label>

                            
                                <input id="instagram" type="text" class="form-control" name="instagram"
                                 value="{{ old('instagram') }}"autofocus >

                                @if ($errors->has('instagram'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                            <label for="facebook" class="col-md-4 control-label">facebook Handle</label>

                           
                                <input id="facebook" type="text" class="form-control" name="facebook"
                                 value="{{ old('facebook') }}"autofocus >

                                @if ($errors->has('facebook'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                        <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                            <label for="image_url" class="col-md-4 control-label">Image_Url</label>

                           
                                <input id="image_url" type="text" class="form-control" name="image_url"
                                 value="{{ old('image_url') }}" autofocus>

                                @if ($errors->has('image_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_url') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        
                           

                            <div class="form-group{{ $errors->has('story') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Brief Description:</label>

                            
                                <textarea id="story"  rows="4" type="text" class="form-control" 
                                name="story"
                                 value="{{ old('story') }}"  autofocus></textarea>

                                @if ($errors->has('story'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('story') }}</strong>
                                    </span>
                                @endif
                           
                            </div>

                
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Add 
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
