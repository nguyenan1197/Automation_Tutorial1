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
     * @param SecondPage $I
     * @throws \Exception
     */
    public function testCalenderButton(SecondPage $I)
    {
        $I= $this;
        $I->doubleClick(SecondPage::$calenderIcon);
        $I->waitForElementVisible('Calender',3);
        $I->pause();
    }

    /**
     * @param array $validValue
     */
    public function addNewReservation($validValue = array())
    {
        $I= $this;
        $I->fillField(SecondPage::$tableIDfield, $validValue['tableID']);
        $I->fillField(SecondPage::$numberOfPersonField, $validValue['numberOfPerson']);
        $I->fillField(SecondPage::$dateField, $validValue['date']);
        if(isset($validValue['']))
        {
            $I->fillField(SecondPage::$descriptionField, $validValue['description']);
        }
        $I->fillField(SecondPage::$startTimeField, $validValue['startTime']);
        $I->click(SecondPage::$addEditButton);
        $I->click(FirstPage::$page2Icon);
        $I->comment('A new reservation');
    }





}