<?php
namespace Aqnouch\TripSorter;

require_once __DIR__ . '/vendor/autoload.php';

use Aqnouch\TripSorter\BoardingCards\AirportBusBoardingCard;
use Aqnouch\TripSorter\BoardingCards\FlightBoardingCard;
use Aqnouch\TripSorter\BoardingCards\TrainBoardingCard;

require_once "src/trip.php";
    // Lets plan a trip :)
    $journey = new  Trip();

    $journey->addCard(new FlightBoardingCard('Stockholm', 'New York JFK', '7B', 'SK22', '22'));
    $journey->addCard(new FlightBoardingCard('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344'));
    $journey->addCard(new TrainBoardingCard('Madrid', 'Barcelona', '45B', '78A'));
    $journey->addCard(new AirportBusBoardingCard('Barcelona', 'Gerona Airport'));

    $journey->sortCard();

    echo ($journey->toHtml());


