<?php

namespace Aqnouch\TripSorter\Test;

use Aqnouch\TripSorter\BoardingCards\AirportBusBoardingCard;

class AirportBusBoardingCardTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $airportBusBoardingCard = new AirportBusBoardingCard('Casablanca', 'Gerona Airport');

        $this->assertEquals($airportBusBoardingCard->toString(),"Take the airport bus from Casablanca to Gerona Airport. No seat assignment.");
    }
}

