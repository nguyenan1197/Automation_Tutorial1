<?php
namespace Step\Acceptance;

use Page\Acceptance\FirstPage;

class FirstSteps extends \AcceptanceTester
{
    /**
     * Click Icon and Button
     */
    public function testSortIcon()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->click(FirstPage::$sortIDicon);
        $I->click(FirstPage::$sortTypeIcon);
        $I->click(FirstPage::$sortTableIdIcon);
        $I->click(FirstPage::$sortNumberOfPersonIcon);
        $I->click(FirstPage::$sortDateIcon);
        $I->click(FirstPage::$sortDescriptionIcon);
        $I->click(FirstPage::$sortDurationIcon);
        $I->click(FirstPage::$sortStartTimeIcon);
        $I->click(FirstPage::$sortDeleteIcon);
        $I->click(FirstPage::$sortEditIcon);
        $I->click(FirstPage::$page2Icon);
        $I->click(FirstPage::$reload);
        $I->click(FirstPage::$newReservations);
        $I->seeInCurrentUrl('QATest/reservationform');
        $I->pause();

    }

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