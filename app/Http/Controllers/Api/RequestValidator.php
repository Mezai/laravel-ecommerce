<?php

namespace App\Http\Controllers\Api;
use Ecommerce\Formatter\Formatter;

class RequestValidator extends Formatter {

	public function validateDates(array $dates)
    {
        foreach ($dates as $key => $date) {
            if ((bool)preg_match("/^[0-9]{4}(0[1-9]|1[012])(0[1-9]|1[0-9]|2[0-9]|3[01])$/", $date) === false) {
                return false;
            }
        }
    
        $formated = $this->formatsDates($dates);

        foreach ($formated as $type => $date) {
        	if (!checkdate($date['month'], $date['day'], $date['year'])) {
        		return false;
        	}
        }

        return true;
    }
}