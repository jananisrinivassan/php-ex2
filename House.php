<?php

class House {
    private $id;
    private $yearOfCreation;
    private $numberOfBedrooms;
    private $surfaceArea;

    // Static attribute to track the last house created
    private static $lastHouseId = 0;

    public function __construct($yearOfCreation, $numberOfBedrooms, $surfaceArea) {
        $this->id = ++self::$lastHouseId;
        $this->yearOfCreation = $yearOfCreation;
        $this->numberOfBedrooms = $numberOfBedrooms;
        $this->surfaceArea = $surfaceArea;
    }

    // Getters for private properties
    public function getId() {
        return $this->id;
    }

    public function getYearOfCreation() {
        return $this->yearOfCreation;
    }

    public function getNumberOfBedrooms() {
        return $this->numberOfBedrooms;
    }

    public function getSurfaceArea() {
        return $this->surfaceArea;
    }
}
?>