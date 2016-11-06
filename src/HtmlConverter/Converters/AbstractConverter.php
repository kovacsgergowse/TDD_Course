<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 22:34
 */

namespace HtmlConverter\Converters;

abstract class AbstractConverter
{
    abstract function convert($string);

    /**
     * @param string $markdown
     * @param string $replaceFront
     * @param string $replaceBack
     * @param string $subject
     * @return string
     */
    protected function simpleEvenChange($markdown, $replaceFront, $replaceBack, $subject)
    {
        $pattern = '/'.$markdown.'(.*)'.$markdown.'/';
        $subject = preg_replace($pattern, $replaceFront . "$1" . $replaceBack, $subject);
        return $subject;
    }
}