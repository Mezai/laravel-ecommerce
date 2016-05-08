<?php


if (!function_exists('formatPrice')) {
	function formatPrice($price) {
			
		setlocale(LC_MONETARY, 'sv_SE');

		$formated = sprintf('%01.2f', $price);
		return $formated;
	}
}


