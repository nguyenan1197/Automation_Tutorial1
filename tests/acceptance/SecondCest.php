<?php

use Step\Acceptance\SecondSteps;
class SecondCest
{
    /**
     * @param SecondSteps $I
     * Check click add/edit button when Empty Data
     */
    public function emtyData(SecondSteps $I)
    {
        $I->wantToTest('I do not fill Data in field');
        $I->testEmtyData();
    }
    /**
     * @param SecondSteps $I
     * Table ID only from 1 to 7 dependent on Avaiable Tables
     */
    public function invalidTableID(SecondSteps $I)
    {
        $I->wantToTest('I type invalid Table ID and click add button');
        $I->testInvalidTableID('8', '1147483648', 17);
    }

    /**
     * @param SecondSteps $I
     * Number Of Person has datatypes is Int 4 byte (-2147483648 ~ 2147483687)
     */
    /*
    public function invalidNumberOfPerson(SecondSteps $I)
    {
        $I->wantToTest('I type invalid Number Of Person and click add button');
        $I->testInvalidNumberOfPerson('7','2147483648', '17');
    }
    */
    /**
     * @param SecondSteps $I
     * Start time required 17 to 23
     */
    /*
    public function invalidStartTime(SecondSteps $I)
    {
        $I->wantToTest('I type invalid start time and click add button');
        $I->testInvalidNumberOfPerson('7','1147483648', '13');
    }
    */
    /**
     * @param SecondSteps $I
     * @throws Exception
     * check Calender button
     */
    public function clickCalenderButton(SecondSteps $I)
    {
        $I->wantToTest('I want test Calender button');
        $I->testCalenderButton();
    }
    /**
     * @var string
     */
    protected $tableID;
    /**
     * @var string
     */
    private $numberOfPerson;
    /**
     * @var string
     */
    public $startTime;

    /**
     * SecondCest constructor.
     */
    public function __construct()
    {
        $this->tableID = '7';
        $this->numberOfPerson = '1310';
        $this->startTime = '19';
    }

    /**
     * @param SecondSteps $I
     * Add new reservation
     */
    public function addNewReservation(SecondSteps $I)
    {
        $I->wantToTest('I want add new reservation');
        $I->addNewReservation($this->tableID, $this->numberOfPerson, $this->startTime);
    }

}