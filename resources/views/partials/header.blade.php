<header class="banner w-100">
  {{-- <div class="bck-color"></div> --}}
  <div class="container-fluid d-flex pt-lg-4 pr-lg-4 pl-lg-4">

      <a class="brand mr-auto d-block" href="{{ home_url('/') }}">@svg('logo','ico-logo')</a>
      <a class="suport-us btn btn-suport d-block d-lg-none" href="#"role="button" aria-disabled="true">@svg('heart','ico-heart') <?php echo __('AJUDA&apos;NS','dropstheme'); ?></a>
      <input type="checkbox" id="menu-toggle" />
      <label for="menu-toggle" class="label-toggle">
          <span></span>
          <span></span>
          <span></span>
      </label>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
        <a class="suport-us btn btn-outline-primary d-inline-block d-lg-none mt-5 ml-4" href="#"role="button" aria-disabled="true">@svg('heart','ico-heart') <?php echo __('AJUDA&apos;NS','dropstheme'); ?></a>
      </nav>
      <a class="suport-us btn btn-suport d-none d-lg-block" href="#"role="button" aria-disabled="true">@svg('heart','ico-heart') <?php echo __('AJUDA&apos;NS','dropstheme'); ?></a>


  </div>

</header>
