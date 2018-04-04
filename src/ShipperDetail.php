<?php

namespace PropagoSoap;

class ShipperDetail
{

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var float $ShippingCost
     */
    protected $ShippingCost = null;

    /**
     * @param float $ShippingCost
     */
    public function __construct($ShippingCost)
    {
      $this->ShippingCost = $ShippingCost;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \PropagoSoap\ShipperDetail
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \PropagoSoap\ShipperDetail
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->ShippingCost;
    }

    /**
     * @param float $ShippingCost
     * @return \PropagoSoap\ShipperDetail
     */
    public function setShippingCost($ShippingCost)
    {
      $this->ShippingCost = $ShippingCost;
      return $this;
    }

}
