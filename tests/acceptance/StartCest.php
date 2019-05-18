<?php

use Step\Acceptance\FirstSteps;
use Step\Acceptance\SortTableSteps;
class StartCest
{
    /**
     * @param StartCest $I
     * Test click all Icon and Button
     */
    public function doClickIcon(SortTableSteps $I)
    {
        $I->wantToTest('I want to do click sort Icon success');
        $I->testSortIcon();
    }

    /**
     * @param FirstSteps $I
     * Test Edit Option
     */
    public function doEditFunc(FirstSteps $I)
    {
        $I->wantToTest('I want to test Edit Option');
        $I->testEditFunc();
    }

    /**
     * @param FirstSteps $I
     * Test Delete Function
     */
    public function doClickDel(FirstSteps $I)
    {
        $I->wantToTest('I want to test Del Func');
        $I->testDeleteFunc();
    }

}
