<!-- Modal -->
<div class="modal fade" id="{{ str_replace(' ', '', $name )}}" tabindex="-1" role="dialog" aria-labelledby="{!!$name!!}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="{{ str_replace(' ', '', $name )}}">{!!$name!!}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!$bio!!}
      </div>

    </div>
  </div>
</div>
