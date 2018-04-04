<?php

namespace PropagoSoap;

class ShipToAddress
{

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $AddressLine3
     */
    protected $AddressLine3 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return \PropagoSoap\ShipToAddress
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PropagoSoap\ShipToAddress
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
      return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return \PropagoSoap\ShipToAddress
     */
    public function setAddressLine1($AddressLine1)
    {
      $this->AddressLine1 = $AddressLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
      return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     * @return \PropagoSoap\ShipToAddress
     */
    public function setAddressLine2($AddressLine2)
    {
      $this->AddressLine2 = $AddressLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine3()
    {
      return $this->AddressLine3;
    }

    /**
     * @param string $AddressLine3
     * @return \PropagoSoap\ShipToAddress
     */
    public function setAddressLine3($AddressLine3)
    {
      $this->AddressLine3 = $AddressLine3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \PropagoSoap\ShipToAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \PropagoSoap\ShipToAddress
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \PropagoSoap\ShipToAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \PropagoSoap\ShipToAddress
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \PropagoSoap\ShipToAddress
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
