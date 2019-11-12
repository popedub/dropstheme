<?php
$bck = get_field('image_featured'); //for all :)
$term = get_queried_object(); //category
$bck_campaigns = get_field('featured_image_category', $term); //category image
$bck_single = get_the_post_thumbnail_url(); //single

$ti = get_field('titulo_featured'); //for all :)
$sub_ti = get_field('subtitulo_featured');
$btn = get_field('boton');
$btn_link = get_field('link_button');
?>
<section class="hero position-relative">
  <div class="back-img"
    @if (is_page())

      style="background-image:url('<?php echo $bck; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;"

    @endif

    @if (is_category())

      style="background-image:url('<?php echo $bck_campaigns; ?>'); background-repeat: no-repeat; background-size: cover;background-position: center;"

    @endif

    @if (is_single())
      style="background-image:url('<?php echo $bck_single; ?>'); background-repeat: no-repeat; background-size: cover;background-position: center;"
    @endif
  >
  </div>
  <div class="bck-color"></div>
    <div class="container">
      <div class="title-header">
        @if (is_page())
          <span class="sub">@php echo $sub_ti  @endphp</span>
            <h1>@php echo $ti @endphp</h1>
            @if ($btn)
                <a href="<?php  echo $btn_link; ?>" class="btn btn-outline-white" role="button" aria-disabled="true">@php echo $btn @endphp</a>
            @endif

        @endif

        @if (is_category())
          <span class="sub"><?php echo __('ajudar de debò és donar eines,<br>no caritat','dropstheme');  ?></span>
            <h1><?php  echo __('campanyes','dropstheme'); ?></h1>
        @endif

        @if (is_single())
          <span class="sub">{!!$campanias->sub!!} @php echo __('– campaign','dropstheme')  @endphp</span>
            <h1>{!! get_the_title() !!}</h1>
        @endif
      </div>
    </div>
</section>
