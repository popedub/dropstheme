<section class="about azul">
  <div class="container">
    <div class="row">
      <div class="col1 text-uppercase">
        <div class="title mb-lg-auto f2"><?php echo __('Context','dropstheme')?></div>
        <img src="{{$bloke->photo_contexto['sizes']['drops']}}" class="img-fluid d-none d-lg-block">

      </div>
      <div class="col2">
        {!!$bloke->contexto!!}
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <div class="col1 text-uppercase">
        <div class="text-uppercase mb-lg-auto f2"><?php echo __('El Projecte','dropstheme')?></div>
        <img src="{{$bloke->photo_project['sizes']['drops']}}" class="img-fluid d-none d-lg-block">

      </div>
      <div class="col2">
        {!!$bloke->project!!}
      </div>
    </div>
  </div>
</section>

<section class="brown">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php $campania = get_field('campaign_about');?>
        @php echo do_shortcode($campania) @endphp


      </div>
    </div>
    <div class="row">
      <div class="col text-center half-pad">
        <span class="text-small"><?php echo __('DROPS & OCEANS està inscrita en el Registre d&#39;Associacions de la Generalitat de Catalunya amb número d&#39;Identificació Fiscal G67516385','dropstheme');?></span>
      </div>
    </div>
  </div>
</section>

<section class="about half-pad">
  <div class="container">
    <div class="row">
      <div class="col">
      <h3 class="text-uppercase text-center"><?php echo __('els nostres<br>reptes','dropstheme');?></h3>

      <div class="slide-support">
        {!! $slides !!}
      </div>
      <div class="next slick-next">
        @svg('mas','ico-mas')
      </div>
      </div>
    </div>
  </div>
</section>

<section class="team half-pad">
  <div class="container">
    <div class="row">
      <div class="col">
      <h3 class="text-uppercase text-center mb-5"><?php echo __('equip','dropstheme');?></h3>


        <div class="slide-team">
          {!! $team !!}
        </div>

      <div class="prev-team slick-prev">
        @svg('menos','ico-menos')
      </div>
      <div class="next-team slick-next">
        @svg('mas','ico-mas')
      </div>
      <div class="modales">
        {!! $modal !!}
      </div>
      </div>
    </div>
  </div>
</section>

@include('partials.twitter')
