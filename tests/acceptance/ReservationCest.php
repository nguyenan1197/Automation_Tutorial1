<?php

use Step\Acceptance\SecondSteps;
class ReservationCest
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
     * @var array
     */
    protected $validValue;

    /**
     * @var array
     */
    protected $invalidValue;

    /**
     * Reservation constructor.
     */
    public function __construct()
    {
        $this->validValue =
        [
            'tableID' => '7',
            'numberOfPerson' => '4',
            'date' => '18/05/2019',
            'description' => 'New reservation',
            'startTime' => '19'
        ];

        $this->invalidValue =
        [
            'tableID' => '2',
            'numberOfPerson' => '3',
            'date' => '19/05/2019',
            'description' => '',
            'startTime' => '4',
        ];
    }

    /**
     * @param SecondSteps $I
     * Add new reservation
     */
    public function addNewReservation(SecondSteps $I)
    {
        $I->wantToTest('I want add new reservation');
        $I->addNewReservation($this->validValue);
        $I->comment('Created reservation');
        $I->pause();
    }
    /**
     * @param SecondSteps $I
     */
    public function newReservation(SecondSteps $I)
    {
        $I->wantToTest('I want add new reservation');
        $I->addNewReservation($this->invalidValue);
        $I->comment('Failed create reservation');
        $I->pause();
    }
}