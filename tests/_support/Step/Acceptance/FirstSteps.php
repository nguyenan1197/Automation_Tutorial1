<?php
namespace Step\Acceptance;

use Page\Acceptance\FirstPage;

class FirstSteps extends \AcceptanceTester
{

    /**
     * Test Edit Function
     */
    public function testEditFunc()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$editButton);
        $I->seeInCurrentUrl('QATest/reservationform');
        $I->pause();
    }

    /**
     * Test Delete Function
     */
    public function testDeleteFunc()
    {
        $I= $this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$deleteButton);
        $I->pause();
    }

}