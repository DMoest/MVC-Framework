<?php

/**
 * Namespace declared and others in use.
 */
namespace Daap19\Dice;



/**
 * Interface PlayerInterface
 * @package Daap19\Dice
 */
interface DiceHandInterface
{
    public function __construct();
    public function roll(): array;
    public function getDices(): array;
    public function getLastRoll(): array;
    public function getLastRollAsString(): string;
    public function getSum(): int;
    public function getAverage(): ?float;
}
