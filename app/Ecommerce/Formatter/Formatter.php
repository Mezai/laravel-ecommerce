<?php
namespace Ecommerce\Formatter;

class Formatter
{

    protected function formatsDates(array $dates)
    {
        $pattern = "/^([0-9]{4})(0[1-9]|1[012])(0[1-9]|1[0-9]|2[0-9]|3[01])$/";
        $format = [];
        foreach ($dates as $key => $date) {
            if ($key == 'startDate') {
                preg_match($pattern, $date, $startDate);
                $format['startDate'] = array(
                    'year' => $startDate[1],
                    'month' => $startDate[2],
                    'day' => $startDate[3],
                );
            }

            if ($key == 'endDate') {
                preg_match($pattern, $date, $endDate);
                $format['endDate'] = array(
                    'year' => $endDate[1],
                    'month' => $endDate[2],
                    'day' => $endDate[3],
                );
            }
        }
        return $format;
    }
}
