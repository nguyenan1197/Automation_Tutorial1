<?php
namespace Page\Acceptance;

class FirstPage
{
    /**
     * @var string
     */
    public static $URL = 'https://staging2.formos.com/QATest/';
    /**
     * @var string
     */
    public static $sortIDicon = '//img[@class="t-sort-icon"]';
    /**
     * @var string
     */
    public static $sortTypeIcon = '//img[@id="type:sort"]';
    /**
     * @var string
     */
    public static $sortTableIdIcon = '//img[@id="tableID:sort"]';
    /**
     * @var string
     */
    public static $sortNumberOfPersonIcon = '//img[@id="numberofperson:sort"]';
    /**
     * @var string
     */
    public static $sortDateIcon = '//img[@alt="[Asc]"]';
    /**
     * @var string
     */
    public static $sortDescriptionIcon = '//img[@id="description:sort"]';
    /**
     * @var string
     */
    public static $sortDurationIcon = '//img[@id="duration:sort"]';
    /**
     * @var string
     */
    public static $sortStartTimeIcon = '//img[@id="startTime:sort"]';
    /**
     * @var string
     */
    public static $sortDeleteIcon = '//img[@id="delete:sort"]';
    /**
     * @var string
     */
    public static $sortEditIcon = '//img[@id="edit:sort"]';
    /**
     * @var string
     */
    public static $page2Icon = '//a[@title="Go to page 2"]';
    /**
     * @var string
     */
    public static $reload = '//a[text()="Reload Data"]';

    /**
     * @var string
     */
    public static $newReservations = '//a[text()="New Reservation"]';
    /**
     * @var string
     */
    public static $deleteButton = '(//a[text()="Delete"])[2]';
    /**
     * @var string
     */
    public static $editButton = '(//a[text()="Edit"])[2]';

    /**
     * StartPage constructor.
     * @param \AcceptanceTester $I
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
