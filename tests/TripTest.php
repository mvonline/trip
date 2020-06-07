<?php
namespace Aqnouch\TripSorter\Test;

use Aqnouch\TripSorter\BoardingCards\AirportBusBoardingCard;
use Aqnouch\TripSorter\BoardingCards\FlightBoardingCard;
use Aqnouch\TripSorter\BoardingCards\TrainBoardingCard;
use Aqnouch\TripSorter\Trip;

class TripTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $journey = new  Trip();

        $journey->addCard(new FlightBoardingCard('Stockholm', 'New York JFK', '7B', 'SK22', '22'));
        $journey->addCard(new FlightBoardingCard('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344'));
        $journey->addCard(new TrainBoardingCard('Madrid', 'Casablanca', '45B', '78A'));
        $journey->addCard(new AirportBusBoardingCard('Casablanca', 'Gerona Airport'));


        $journey->sortCard();

        $output = "<ol>".
                     "<li>Take train 78A from Madrid to Casablanca. Sit in seat 45B.</li>".
                     "<li>Take the airport bus from Casablanca to Gerona Airport. No seat assignment.</li>".
                     "<li>From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.</li>".
                     "<li>From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will be automatically transferred from your last leg.</li><li>You have arrived at your final destination.</li>".
                  "</ol>";

        $this->assertEquals($journey->toHtml(), $output);
    }
}

