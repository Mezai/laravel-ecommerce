<?php

namespace Ecommerce\Transformers;


abstract class Transformer {

	/* Transform foreach $item in array */ 
	
	public function transformCollection(array $item) 
	{
		return array_map([$this, 'transform'], $item);
	}

	/* Transform a single time */
	public abstract function transform($item);
}