@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
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

                    You are logged in!
                    <a href="{{ route('feedback') }}">Click To View Feedbacks</a><br>
                    <a href="{{ route('blog') }}">Click To Blog</a><br>
                    <a href="{{ route('viewBlog') }}">Click To View Blog</a><br>
                    <a href="{{ route('addMember') }}">Click To Add Member</a><br>
                    <a href="{{ route('viewTeam') }}">Click To View Members</a><br>

                </div>
            </div>
        </div>
    </div> 
</div>
@endsection
