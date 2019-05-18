<?php


namespace Step\Acceptance;



use Page\Acceptance\FirstPage;
use Page\Acceptance\SecondPage;

class newSteps extends \AcceptanceTester
{
    public function addNewReservation($validValue = array())
    {
        $I= $this;
        $I->amOnPage(SecondPage::$URL);
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