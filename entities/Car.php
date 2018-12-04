<?php


class Car extends Vehicle
{
    protected $doors;

    /**
     * Get the value of doors
     */ 
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set the value of doors
     *
     * @return  self
     */ 
    public function setDoors($doors)
    {
        // if (doors >= 2 || doors <= 5) {
            $this->doors = (int) $doors;
            return $this;
        // } else{
            // throw new Exception('Propriété ou valeur invalide !');
        // }
    }
}