<?php

namespace Page\Acceptance;

class SecondPage
{
    /**
     * @var string
     */
    public static $URL = 'reservationform';
    /**
     * @var string
     */
    public static $tableIDfield = '//input[@id="tableID"]';
    /**
     * @var string
     */
    public static $numberOfPersonField = '//input[@id="numberofperson"]';
    /**
     * @var string
     */
    public static $dateField = '//input[@id="date"]';
    /**
     * @var string
     */
    public static $descriptionField = '//textarea[@id="description"]';
    /**
     * @var string
     */
    public static $startTimeField = '//input[@id="startTime"]';
    /**
     * @var string
     */
    public static $calenderIcon = '//img[@id="date:trigger"]';
    /**
     * @var string
     */
    public static $addEditButton = '//input[@class="t-beaneditor-submit"]';
    /**
     * @var string
     */
    public static $clearButton = '//a[text()="clear"]';

    /**
     * SecondPage constructor.
     * @param \AcceptanceTester $I
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}