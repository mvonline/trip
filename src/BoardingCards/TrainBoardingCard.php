<?php
namespace Aqnouch\TripSorter\BoardingCards;
use Aqnouch\TripSorter\BoardingCards\Common\AbstractBoardingCard;


/**
 * Class TrainBoardingCard
 *
 * Train boarding pass. Child of AbstractBoardingCard. Adds train information to the basic boarding pass.
 *
 * @package Aqnouch\TripSorter\BoardingCards
 * @author AQNOUCH Mohammed <aqnouch.mohammed@gmail.com>
 */
class TrainBoardingCard extends AbstractBoardingCard
{
    /**
     * @var string
     */
    private $train;
    /*
     *  We need to explicitly call the "super" constructor.
     * Then we handle the stuff specific to trains.
     */

    /**
     * Constructor for TrainBaseBoardingCard
     *
     * @param string $departureLocation Departing point for a boarding pass. Origin of the traveller
     * @param string $arrivalLocation Arrival Location for a boarding pass. This is the destination point for one leg of trip, for a traveller
     * @param string $seat Seat # for a boarding pass, common to all kinds of boarding passes
     * @param string $train This denotes train # for a train boarding pass
     */
    function __construct($departureLocation, $arrivalLocation, $seat, $train)
    {
        /*
         *  This is the step that creates the inheritance chain,
         *  so TrainBaseBoardingCard inherits from BoardingCards.
         */

        parent::__construct($departureLocation, $arrivalLocation, $seat);

        $this->train = $train;
    }

    /**
     * Converts an object of TrainBaseBoardingCard into human readable instruction set. This relates to only trains.
     *
     */
    public function toString()
    {
        /** @var $this TrainBoardingCard */
        return 'Take train ' . $this->train . ' from ' . $this->get('departureLocation') . ' to ' . $this->get('arrivalLocation') . '. Sit in seat ' . $this->get('seat') . '.';
    }

}

