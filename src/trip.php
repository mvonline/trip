<?php
namespace Aqnouch\TripSorter;

use Aqnouch\TripSorter\BoardingCards\Common\AbstractBoardingCard;
use Aqnouch\TripSorter\Utils\Sorters\ArraySorter;


/**
 * Class Trip
 *
 * A trip "class" can keep a collection of all the boarding passes
 * associated with a particular trip.
 *
 * @package Aqnouch\TripSorter
 * @author AQNOUCH Mohammed <aqnouch.mohammed@gmail.com>
 */
class Trip
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @var
     */
    private $boardingCard;

    /**
     * @return mixed
     */
    public function getBoardingCards()
    {
        return $this->boardingCard;
    }

    /**
     * @var
     */
    private $sortedBaseBoardingCard;


    /**
     *
     */
    public function sortCard(){
        $this->sortedBaseBoardingCard = ArraySorter::sort($this->boardingCard);
    }


    /**
     * @param AbstractBoardingCard $boardingCard
     */
    public function addCard(AbstractBoardingCard $boardingCard){
        $this->boardingCard[] = $boardingCard;
    }
    /**
     * Define how to convert a trip to a string. This function takes an object of class 'Trip' and converts each
     * boarding pass within it's object to a string using the object's respective class' toString() method
     *
     *
     * @return string  $str  Complete string for the whole human readable instructions each
     * created individually for all boarding passes.
     */

    public function toHtml()
    {
        /**
         *Convert each boarding pass to a string, and concatenate them together.
         */
         $str = '<ol>';

        foreach( $this->sortedBaseBoardingCard as $boarding){

            $str .= '<li>' . $boarding->toString() . '</li>' ;
        }
        /*
         *  Final greetings.
         */

        $str .= '<li>You have arrived at your final destination.</li>';
        $str .= '</ol>';

        return $str;
    }
}

