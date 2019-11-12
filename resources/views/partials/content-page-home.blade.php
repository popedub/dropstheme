@php
    $txt1 = get_field('text_left_after_photo');
    $txt2 = get_field('text_right_under_photo');
    $size = 'drops'; //si queremos llamar a un tamaño de foto determinado
    $foto = get_field('foto_second_section');
    $f = $foto['sizes'][$size]; //aqui llamamos al size
    $txt3 = get_field('text_second_section');
    $donation = get_field('section_donation');
@endphp
<section class="azul">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5 text-uppercase f2">
        @php echo $txt1 @endphp
      </div>
      <div class="col-12 col-lg-7">
        @php echo $txt2 @endphp
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-home-offset">
        <div class="f-stand f4-lg mb-lg-5">
          @php echo $txt3 @endphp
        </div>
        <a href="<?php  echo get_permalink(9) ?>" class="btn btn-primary mb-3" role="button" aria-disabled="true"><?php echo __('LLEGEIX MÉS','dropstheme');?></a>
      </div>
    </div>
  </div>
</section>

@include('partials.content-posts-home')


<section class="half-pad">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="text-center text-uppercase custom-pad-bottom"> @php echo __('els nostres<br>reptes','dropstheme') @endphp </h3>
      </div>
    </div>

    <div class="row">
        <div class="icons-home col-12 d-flex text-center flex-wrap flex-lg-nowrap justify-content-center">
          <div>
            @svg('analysis','ico ico-analisis')
            <span>@php echo __('impacte<br> socioeconòmic', 'dropstheme')@endphp</span>
          </div>
          <div>
            @svg('money','ico ico-money')
            <span>@php echo __('plans<br>estratègics', 'dropstheme')@endphp</span>
          </div>
          <div>
            @svg('network','ico ico-network')
            <span>@php echo __('emergències', 'dropstheme')@endphp</span>
          </div>
          <div>
            @svg('siren','ico ico-siren')
            <span>@php echo __('finançament <br>i assesoria', 'dropstheme')@endphp</span>
          </div>
          <div>
            @svg('sketch','ico ico-sketch')
            <span>@php echo __('difusió', 'dropstheme')@endphp</span>
          </div>



        </div>
    </div>
    <div class="row">
      <div class="col-12 d-block text-center">
        <a href="<?php get_permalink(9)?>" class="btn btn-outline-primary" role="button" aria-disabled="true"><?php echo __('LLEGEIX MÉS','dropstheme');?></a>
      </div>
    </div>
  </div>

</section>

@include('partials.twitter')
