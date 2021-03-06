<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:10
 */

namespace HtmlConverter\Converters;

/**
 * Class Italic
 * Do the _ _ -> <i></i> thing.
 * @package HtmlConverter\Converters
 */
class Italic extends AbstractConverter
{

    public function convert($string)
    {
        return $this->simpleEvenChange('_', "<i>", "</i>", $string);
    }
}