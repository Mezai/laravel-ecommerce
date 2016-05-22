<?php


if (!function_exists('formatPrice')) {
	function formatPrice($price) {
			
		$formated = number_format(abs($price), 2) . " " . 'SEK';
		
        return ($price < 0) ? "($formated)" : $formated;
	}
}



function flash($message, $level = 'info') {

	session()->flash('flash_message', $message);
	session()->flash('flash_message_level', $level);
 }
