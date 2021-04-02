<?php


abstract class HighWay
{
    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;




    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles(array $currentVehicles): HighWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);

}