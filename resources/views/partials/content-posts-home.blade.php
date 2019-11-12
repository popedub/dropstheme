  <?php
  $args = array(
    'posts_per_page' => 2,
    'cat' => 9,
    'category__not_in' => 12 ,
  );
  $q = new WP_Query( $args );
  ?>
<section class="gris half-pad">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="text-center text-uppercase custom-pad-bottom"><?php echo __('campanyes actives','dropstheme');?></h3>
      </div>
      @while ($q->have_posts()) @php $q->the_post() @endphp
        @include('partials.content')
      @endwhile
    </div>
  </div>
</section>
<?php wp_reset_postdata();?>
