<?php
namespace Aqnouch\TripSorter\Test;

use Aqnouch\TripSorter\BoardingCards\FlightBoardingCard;

class FlightBoardingCardTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $airportBusBoardingCard = new FlightBoardingCard('Stockholm', 'New York JFK', '7B', 'SK22', '22');

        $this->assertEquals($airportBusBoardingCard->toString(),"From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.");
    }

}
