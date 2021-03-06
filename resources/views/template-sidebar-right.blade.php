{{--
  Template Name: Page Right Sidebar
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection

@section('sidebar')
  @include('partials.sidebar')    
@endsection
