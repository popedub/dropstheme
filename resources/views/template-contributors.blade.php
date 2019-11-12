{{--
  Template Name: Contributors Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @include('partials.content-page-collaborators')
  @endwhile
@endsection
