<div class="item-slide-team text-center">

  <figure>
    <img src="{!! $foto['sizes']['drops'] !!}" class="img-fluid">
  </figure>
  <div class="name text-uppercase text-left f4 mb-4">{!!$name!!}</div>
  <div class="resumen text-left">{!!$excrpt!!}</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-fdo-white text-uppercase" data-toggle="modal" data-target="#{{ str_replace(' ', '', $name )}}">
  <?php echo __('llegeix més','droptheme')?>
</button>



</div>

