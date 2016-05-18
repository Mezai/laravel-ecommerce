<div class="panel-footer">
    <div class="row">
      <div class="col col-xs-4">
        Page {!! $pagination->currentPage() !!} of {!! $pagination->lastPage() !!}
      </div>
      <div class="col col-xs-8">
        @if ($pagination->lastPage() > 1)
          <ul class="pagination hidden-xs pull-right">
            <li class="{{ ($pagination->currentPage() == 1) ? ' disabled' : '' }}">
              <a href="{{ $pagination->url(1) }}"><<</a>
            </li>
          @for ($i = 1; $i <= $pagination->lastPage(); $i++)
            <li class="{{ ($pagination->currentPage() == $i) ? ' active' : '' }}">
              <a href="{{ $pagination->url($i) }}">{{ $i }}</a>
            </li>
          @endfor
          <li class="{{ ($pagination->currentPage() == $pagination->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $pagination->url($pagination->currentPage()+1) }}" >>></a>
          </li>
      </ul>
      @endif 
      </div>
   </div>
</div> 