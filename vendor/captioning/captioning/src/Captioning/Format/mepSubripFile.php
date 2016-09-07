<?php
/**
 * mepSubripFile.php
 * greyowl
 * 07/09/16 1:59 AM 2016 09 07 01 59 srt
 */

namespace Captioning;


class mepSubripFile extends SubripFile {
    /**
     * @param string $_output_format
     * @return mixed
     */
    public function convertTo($_output_format)
    {
        $fileFormat = self::getFormat($this);
        $method     = strtolower($fileFormat).'2'.strtolower(rtrim($_output_format, 'File'));

        if (method_exists(new Converter(), $method)) {
            return mepConverter::$method($this);
        }
        return mepConverter::defaultConverter($this, $_output_format);
    }
}