<?php
namespace Aqnouch\TripSorter\Utils\Interfaces;

/**
 * Interface SortInterface
 *
 * Interface for sorting algorithms
 *
 * @package Aqnouch\TripSorter\Utils\Interfaces
 */
interface SortInterface {
    /**
     * Sort method should implement.
     * @param array $items
     */
    public static function sort(array $items);
}
