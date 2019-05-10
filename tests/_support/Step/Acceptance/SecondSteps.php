<?php

namespace Step\Acceptance;
use Page\Acceptance\FirstPage;
use Page\Acceptance\SecondPage;

class SecondSteps extends \AcceptanceTester
{
    /**
     * Empty Data
     */
    public function testEmtyData()
    {
        $I= $this;
        $I->amOnPage(SecondPage::$URL);
        $I->click(SecondPage::$addEditButton);
        $I->comment('You must provide a value');
        $I->pause();
    }

    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $startTime
     * Check Invalid Data Table ID
     */
    public function testInvalidTableID($tableID, $numberOfPerson, $startTime)
    {
        $I= $this;
        $I->fillField(SecondPage::$tableIDfield, $tableID);
        $I->fillField(SecondPage::$numberOfPersonField, $numberOfPerson);
        $I->fillField(SecondPage::$startTimeField,$startTime);
        $I->click(SecondPage::$addEditButton);
        $I->comment('Table ID is not existing !');
        $I->pause();
    }

    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $startTime
     * Check Invalid Data Number of Person
     */
    /*
    public function testInvalidNumberOfPerson($tableID, $numberOfPerson, $startTime)
    {
        $I= $this;
        $I->fillField(SecondPage::$tableIDfield, $tableID);
        $I->fillField(SecondPage::$numberOfPersonField, $numberOfPerson);
        $I->fillField(SecondPage::$startTimeField,$startTime);
        $I->click(SecondPage::$addEditButton);
        $I->comment('The input value \'2147483648\' is not parseable as an integer value.');
        $I->pause();
    }
    */
    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $startTime
     * Check Invalid start time
     */
    /*
    public function testInvalidstartTime($tableID, $numberOfPerson, $startTime)
    {
        $I= $this;
        $I->fillField(SecondPage::$tableIDfield, $tableID);
        $I->fillField(SecondPage::$numberOfPersonField, $numberOfPerson);
        $I->fillField(SecondPage::$startTimeField,$startTime);
        $I->click(SecondPage::$addEditButton);
        $I->dontSee('Error Message');
        $I->pause();

    }
    */
    /**
     * @param SecondPage $I
     * @throws \Exception
     * Check calender button
     */
    public function testCalenderButton(SecondPage $I)
    {
        $I= $this;
        $I->doubleClick(SecondPage::$calenderIcon);
        $I->waitForElementVisible('Calender',3);
        $I->pause();
    }

    /**
     * @param $tableID
     * @param $numberOfPerson
     * @param $startTime
     * Add new reservation
     */
    public function addNewReservation($tableID, $numberOfPerson, $startTime)
    {
        $I= $this;
        $I->fillField(SecondPage::$tableIDfield, $tableID);
        $I->fillField(SecondPage::$numberOfPersonField, $numberOfPerson);
        $I->fillField(SecondPage::$startTimeField, $startTime);
        $I->click(SecondPage::$addEditButton);
        $I->click(FirstPage::$page2Icon);
        $I->comment('A new reservation');
        $I->pause();
    }

}