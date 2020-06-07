<?php
namespace Aqnouch\TripSorter\BoardingCards;
use Aqnouch\TripSorter\BoardingCards\Common\AbstractBoardingCard;

/**
 * Class AirportBusBoardingCard
 *
 * Airport Bus Boarding Pass which extends AbstractBoardingCard
 *
 * @package Aqnouch\TripSorter\BoardingCards
 * @author AQNOUCH Mohammed <aqnouch.mohammed@gmail.com>
 */
class AirportBusBoardingCard extends AbstractBoardingCard
{
    /**
     * Constructor for AirportBusBaseBoardingCard
     */

    /**
     * Constructor for TrainBaseBoardingCard
     *
     * @param string $departureLocation Departing point for a boarding pass. Origin of the traveller
     * @param string $arrivalLocation Arrival Location for a boarding pass. This is the destination point for one leg of trip, for a traveller
     * @param string $seat Seat # for a boarding pass, common to all kinds of boarding passes
     */
    function __construct($departureLocation, $arrivalLocation, $seat = null)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seat);

    }

    /**
     * There does not seem to be any case specific to airport buses. But its for the following reason in requirements
     * 3. Be prepared to suggest to us how we could extend the code towards new types of transportation, which might have different characteristics.
     * Nonetheless, we create this "class" for completeness. And later code completely if needed
     */

    /**
     * Converts an object of AirportBusBaseBoardingCard into human readable instruction set. This relates to only Airport passes.
     */
    public function toString()
{
    /** @var $this AirportBusBaseBoardingCard */
    return 'Take the airport bus from ' . $this->get('departureLocation') . ' to ' . $this->get('arrivalLocation') . '. ' . ($this->get('seat') ? 'Sit in seat ' . $this->get('seat') . '.' : 'No seat assignment.');
}

}



