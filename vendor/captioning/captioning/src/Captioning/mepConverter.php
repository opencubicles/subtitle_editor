<?php
/**
 * mepConverter.php
 * greyowl
 * 07/09/16 2:02 AM 2016 09 07 02 02 srt
 */


namespace Captioning;


class mepConverter extends Converter
{
    public static function subrip2cliptext(SubripFile $_srt)
    {
        foreach ($_srt->getCues() as $cue) {
            var_dump($cue);
        }


    }
}