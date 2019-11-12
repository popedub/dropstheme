<article @php (post_class()) @endphp>
<section class="azul">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5 text-uppercase">
       <h3 class="f-oswald"> {!! $campanias->frase_blue!!} </h3>
      </div>

      <div class="col-12 col-lg-7">
        {!!$campanias->intro_blue!!}
      </div>
    </div>
  </div>
</section>

<section class="gris">
  <div class="container">
    <div class="row">
      <div class="col">
        @php
            echo do_shortcode( $campanias->campania );
        @endphp
      </div>
    </div>
  </div>
</section>

<section class="half-pad">
  <div class="container">
    <div class="row">
      <div class="col col-lg-5">
        <h3 class="text-uppercase"><?php echo __('galeria<br>d&apos;imatges', 'dropstheme');?></h3>
      </div>
      <div class="col col-lg-7">
        <div class="single-gallery">
          @foreach ($gallery as $item)
            <img src="{!!$item->sizes->large!!}" class="img-fluid">

          @endforeach
        </div>

        <div class="prev slick-prev">
          @svg('menos','ico-menos')
        </div>
        <div class="next slick-next">
          @svg('mas','ico-mas')
        </div>

      </div>

    </div>

  </div>
</section>

<section class="pt-0">
  <div class="container">
    <hr>
    <div class="row half-pad custom-pad-bottom">
      <div class="col col-lg-12 text-center">
        <h3 class="text-uppercase"><?php echo __('entitats col·laboradores','dropstheme');?></h3>
      </div>
    </div>
    <div class="row">
        @foreach ($institutions as $item)
          <div class="intitutions">
            <span class="title f4 pb-4 d-block">
               ● {!!$item->name!!}
            </span>
            <span class="text">
              {!!$item->description!!}
            </span>
          </div>
        @endforeach
    </div>
  </div>
</section>

<section class="pt-0">
  <div class="container">
    <hr>
  <div class="row half-pad custom-pad-bottom">
    <div class="col text-center">
      <h3><?php echo __('FAQ', 'dropstheme');?></h3>
    </div>
  </div>
  <div class="row">
    {!!$faq!!}
  </div>
  </div>
</section>
</article>
