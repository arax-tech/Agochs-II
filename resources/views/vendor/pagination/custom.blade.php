@if ($paginator->hasPages())
    <div class="ltn__pagination-area text-center">
    	<div class="ltn__pagination">
    		<ul>
	       
		        @if ($paginator->onFirstPage())
		        	<li><a href="javascript::"><i class="fas fa-angle-double-left"></i></a></li>
		        @else
		        	<li><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-double-left"></i></a></li>
		        @endif


		      
		        @foreach ($elements as $element)
		           
		            @if (is_string($element))
		                <li class="disabled"><span>{{ $element }}</span></li>
		            @endif


		           
		            @if (is_array($element))
		                @foreach ($element as $page => $url)
		                    @if ($page == $paginator->currentPage())
		                        <li class="active"><a href="javascript::">{{ $page }}</a></li>
		                    @else
		                    	<li><a href="{{ $url }}">{{ $page }}</a></li>
		                    @endif
		                @endforeach
		            @endif
		        @endforeach


		        
		        @if ($paginator->hasMorePages())
		            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a></li>
		        @else
		            <li><a href="javascript::"><i class="fas fa-angle-double-right"></i></a></li>
		        @endif
		    </ul>
		 </div>
	</div>
@endif 


{{-- <div class="ltn__pagination-area text-center">
    <div class="ltn__pagination">
        <ul>
            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
        </ul>
    </div>
</div> --}}