<?php

namespace Ecommerce\Transformers;

class OrderTransformer extends Transformer {
	public function transform($orders)
	{
		return [
				'created_at' => $orders['created_at'],
			];
	}
}