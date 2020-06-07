<?php
namespace Aqnouch\TripSorter\BoardingCards\Common;

/**
 * Class AbstractBoardingCard
 *
 * This base class contain all the properties and methods
 * that are common to all modes of transportation.
 *
 * Each mode of transportation will extend AbstractBoardingCard
 * and add properties and methods that are specific
 * to that particular mode of transportation.
 *
 * @property-read string $departureLocation Departing point for a boarding pass. Origin of the traveller
 *
 * @property-read string $arrivalLocation Arrival Location for a boarding pass. This is the destination point for one leg of trip, for a traveller
 *
 * @property-read string $seat Seat # for a boarding pass, common to all kinds of boarding passes
 *
 * @package Aqnouch\TripSorter\BoardingCards\Common
 * @author AQNOUCH Mohammed <aqnouch.mohammed@gmail.com>
 */

abstract class AbstractBoardingCard
{

    /**
     * BoardingCards Constructor
     *
     * @param string $departureLocation Departing point for a boarding pass. Origin of the traveller
     * @param string $arrivalLocation Arrival Location for a boarding pass. This is the destination point for one leg of trip, for a traveller
     * @param string $seat Seat # for a boarding pass, common to all kinds of boarding passes
     */
    function __construct($departureLocation, $arrivalLocation, $seat)
    {
        $this->departureLocation = $departureLocation;
        $this->arrivalLocation = $arrivalLocation;
        $this->seat = $seat;
    }

    /**
     * @var string
     */
    protected  $departureLocation;
    /**
     * @var string
     */
    protected  $arrivalLocation;
    /**
     * @var string
     */
    protected  $seat;

    /**
     * @param $name
     * @param $value
     */
    public function set($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return $this->$name;
    }

}
