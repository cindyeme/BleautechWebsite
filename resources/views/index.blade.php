@extends('layouts.user')

@section('content')
   
@include('includes.header')  
    
@include('includes.about')

@include('includes.portfolio')
   
@include('includes.testimonials')
    
@include('includes.questions')
    
@include('includes.other')
   
@include('includes.contact')

@include('includes.footer')
   

@endsection