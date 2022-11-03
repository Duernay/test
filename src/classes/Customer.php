<?php

declare(strict_types=1);

class Customer{
    public string $fName;
    public string $lName;
    public int $age;
    public string $sex;
    public string $street;
    public int $houseNumber;
    public string $city;
    public int $postCode;

    /**
     * @return string
     */
    public function getFName(): string
    {
        return $this->fName;
    }

    /**
     * @param string $fName
     */
    public function setFName(string $fName): void
    {
        $this->fName = $fName;
    }

    /**
     * @return string
     */
    public function getLName(): string
    {
        return $this->lName;
    }

    /**
     * @param string $lName
     */
    public function setLName(string $lName): void
    {
        $this->lName = $lName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return int
     */
    public function getHouseNumber(): int
    {
        return $this->houseNumber;
    }

    /**
     * @param int $houseNumber
     */
    public function setHouseNumber(int $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getPostCode(): int
    {
        return $this->postCode;
    }

    /**
     * @param int $postCode
     */
    public function setPostCode(int $postCode): void
    {
        $this->postCode = $postCode;
    }



}