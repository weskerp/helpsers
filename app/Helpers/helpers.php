<?php 

if (!function_exists('getDateFormatted')) {
    function getDateFormatted($date = "", $addYear = 0) {
        setlocale(LC_TIME, 'pt_BR.utf-8', 'pt_BR', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        $date = new DateTime($date);
        $date->modify("+$addYear years");
        $formatter = new IntlDateFormatter(
            'pt_BR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'America/Sao_Paulo',
            IntlDateFormatter::GREGORIAN
        );
        $formatter->setPattern('d \'de\' MMMM \'de\' yyyy');

        return $formatter->format($date);
    }
}