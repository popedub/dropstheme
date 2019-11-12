<article @php (post_class()) @endphp>
<?php
$subti = get_field('subtitle');
$intro = get_field('intro');

?>

  <header>
    @if (has_post_thumbnail())
      <figure>
        <h3 class="entry-title text-uppercase"><a href="{{ get_permalink() }}" class="blanco" style="top: 25px;"><?php echo $subti?></a></h3>
        <div class="bck-color"></div>
        {!!the_post_thumbnail('drops-large', array('class' => 'img-fluid' ))!!}
        <a href="{{ get_permalink() }}" class="btn btn-fdo-white text-uppercase" role="button" aria-disabled="true">@php echo __('col·labora-hi','dropstheme') @endphp</a>
      </figure>
    @endif



  </header>
  <div class="dentro">
  <div class="entry-summary">
    <h2 class="text-uppercase mb-4">{!! get_the_title() !!}</h2>
    <?php echo $intro ?>
  </div>
  @include('partials.share')
</div>
</article>
