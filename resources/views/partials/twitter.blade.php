<section class="custom-pad-bottom">

  <div class="container">
    @if ( basename(get_page_template()) == "template-about.blade.php")

    @else
    <hr>
    @endif

    <div class="row">
      <div class="col">

        <div class="d-flex justify-content-center half-pad">
          <div class="link-user-tw d-none d-lg-block position-absolute">
            @svg('twitter', 'ico-tw')
            <a href="https://twitter.com/dropsandoceans" target="_blank"><span>@</span>DROPSANDOCEANS</a>
          </div>
          <div>
            <h3 class="text-center">@php echo __('UNEIX-TE A LA CONVERSA','dropstheme')@endphp</h3>

          </div>

        </div>

      <div class="link-user-tw d-block d-lg-none text-center pt-5 pb-5">
        @svg('twitter', 'ico-tw') <br>
          <a href="https://twitter.com/dropsandoceans" target="_blank"><span>@</span>DROPSANDOCEANS</a>
      </div>
        <?php fetchTweets( array( 'id' => 69 ) ); ?>

        <div class="w-100 text-center">
              <a href="https://twitter.com/dropsandoceans" target="_blank" class="btn btn-outline-primary"><?php echo __('MÉS TUITS','dropstheme');?></a>
        </div>
      </div>
    </div>
  </div>
</section>
