@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @while(have_posts()) @php the_post() @endphp
      <div class="col-12">
        @include('partials.page-header')
      </div>
      <div class="col-12">
        @include('partials.content-page')
      </div>
      @endwhile
    </div>
  </div>
@endsection
