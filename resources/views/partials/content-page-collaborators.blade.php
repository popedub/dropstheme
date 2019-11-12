<section class="azul contributors">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5 text-uppercase f-oswald f2">
        {!!$intro->intro!!}
      </div>
      <div class="col-12 col-lg-7">
        {!!$intro->texto!!}
      </div>
    </div>
  </div>
</section>

<section class="contributors half-pad gris">
  <div class="container">
    <div class="row">
      <div class="col-12 custom-pad-bottom">
        <h3 class="text-uppercase text-center mb-5">
          @php
              echo __('col·laboren amb nosalres','dropstheme')
          @endphp
        </h3>
      </div>

      {!! $colab !!}
    </div>
  </div>
</section>

<section class="contributors half-pad">
  <div class="container">
    <div class="row">
      <div class="col-12 custom-pad-bottom">
        <h3 class="text-uppercase text-center">
          @php
              echo __('entitats que ens donen suport','dropstheme')
          @endphp
        </h3>
      </div>

      {!! $parthners !!}
    </div>
  </div>
</section>

@include('partials.twitter')
