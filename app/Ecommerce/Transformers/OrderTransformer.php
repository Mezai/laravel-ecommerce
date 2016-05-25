<?php

namespace Ecommerce\Transformers;

class OrderTransformer extends Transformer {
	public function transform($orders)
	{	

		return [
				'totalItems' => count($orders),
			];
	}
}