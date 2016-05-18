<div class="panel-footer">
    <div class="row">
      <div class="col col-xs-4">
        Page {!! $products->currentPage() !!} of {!! $products->lastPage() !!}
      </div>
      <div class="col col-xs-8">
        @if ($products->lastPage() > 1)
          <ul class="pagination hidden-xs pull-right">
            <li class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }}">
              <a href="{{ $products->url(1) }}"><<</a>
            </li>
          @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }}">
              <a href="{{ $products->url($i) }}">{{ $i }}</a>
            </li>
          @endfor
          <li class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $products->url($products->currentPage()+1) }}" >>></a>
          </li>
      </ul>
      @endif 
      </div>
   </div>
</div> 