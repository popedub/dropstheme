<footer class="content-info">
  <div class="container-fluid">
    <div class="fondo-br"></div>
    <div class="fondo-blue"></div>

      <div class="row no-gutters">
        <div class="block order-2 order-lg-1">
          <div class="row">
            <div class="col-lg-6 pl-4 d-none d-lg-block">
              <div class="logo-footer">@svg('logo', 'ico-logo')</div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
              <div class="menu-footer">
                @php dynamic_sidebar('sidebar-footer') @endphp
              </div>
            </div>
            <div class="col-12 col-lg-6 mr-footer pl-4">
              <span class="year">© — <?php echo date('Y');?></span>
            </div>
            <div class="col-12 col-lg-6 mr-footer text-center text-lg-left pr-lg-4 text-uppercase">
              <span class="legal"><a href="<?php echo get_permalink(3)?> ">{{get_the_title(3)}}</a></span><br>
              <span class="legal"><a href="<?php echo get_permalink(3)?> ">AVISO LEGAL</a></span><br>
              <span class="legal"><a href="<?php echo get_permalink(3)?> ">CONDICIONES DE CONTRATACIÓN</a></span><br>
              <span class="legal"><a href="<?php echo get_permalink(3)?> ">AVISO LEGAL</a></span>
            </div>
          </div>
        </div>

        <div class="block order-1 order-lg-2">
          <span class="pl-4"><?php echo __('CONNECTA AMB NOSALTRES','dropstheme'); ?></span>
          <div class="social-footer">
            <div class="inner">
              <a href="#" target="_blank" class="marron d-block f3">INSTAGRAM</a>
              <a href="#" target="_blank" class="marron d-block f3">TWITTER</a>
            </div>
          </div>
        </div>
      </div>

  </div>

</footer>
