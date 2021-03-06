<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 12:15
 * https://api.stackexchange.com/docs/featured-questions
 */

namespace StackOverflowProvider\Provider;


use StackOverflowProvider\Api\ApiFieldNames;
use StackOverflowProvider\Api\Builder\Builder;
use StackOverflowProvider\Api\Builder\BuilderTypes;

class MostPopularQuestion extends AbstractProvider
{
    /** @var  Builder */
    protected $builderType = BuilderTypes::FEATURED;

    /** @var  array */
    protected $params = [
        ApiFieldNames::ORDER => ApiFieldNames::ORDEROPTION_DESC,
        ApiFieldNames::SORT => ApiFieldNames::SORTOPTION_ACTIVITY,
        ApiFieldNames::SITE => "stackoverflow",
        ApiFieldNames::PAGESIZE => "1",
    ];

    /**
     * @param $jsonString
     * @return mixed
     */
    public function getQustionId($jsonString)
    {
        $apiResponse = json_decode($jsonString, true);
        return $apiResponse['items'][0]['question_id'];
    }

}