@extends('layouts.app')

@section('content')
@if (is_category())
 <div class="cat-description azul">
   <div class="container">
    <div class="row">
        <div class="col custom-pad-bottom">
          <?php echo category_description(); ?>
        </div>
    </div>
    <div class="row">
      <div class="col text-center pb-5">
        <h3><?php echo __('campanyes actives','dropstheme');?></h3>
      </div>
      </div>
  </div>
</div>
@endif


  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <?php
  $args = array(
    'posts_per_page' => -1,
    'cat' => 9,
    'category__not_in' => 12 ,
  );
  //para el destacado
  $args2 = array(
    'posts_per_page' => 1,
    'cat' => 12,
    'category__not_in' => 9 ,
  );
  $q = new WP_Query( $args2 );

  ?>
<section class="gris custom-pad-bottom">
  <div class="container">
    <div class="row justify-content-center">
      @while ($q->have_posts()) @php $q->the_post() @endphp
        @include('partials.content-destacado')
      @endwhile
    </div>
  </div>
  <?php
  wp_reset_postdata();
  $q1 = new WP_Query( $args );
  ?>
  <div class="container">
    <div class="row justify-content-center">
      @while ($q1->have_posts()) @php $q1->the_post() @endphp

        @include('partials.content-'.get_post_type())
      @endwhile
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
</section>
  {!! get_the_posts_navigation() !!}
@endsection
