<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 19:48
 */

namespace StackOverflowProvider\Api\Builder;


class AnswersBuilder extends Builder
{
    protected $apiUrlQuery = "/questions/{ids}/answers";

    public function getApiUrlQuery()
    {
        return parent::getApiUrlQuery(); // TODO: Change the autogenerated stub
    }
}