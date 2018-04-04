<?php

namespace PropagoSoap;

class Shipper
{

    /**
     * @var int $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var ArrayOfShipperDetail $ShipmentDetails
     */
    protected $ShipmentDetails = null;

    /**
     * @var ArrayOfShipperLine $ShipmentLines
     */
    protected $ShipmentLines = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @param int $ShipmentId
     * @param \DateTime $ShipDate
     */
    public function __construct($ShipmentId, \DateTime $ShipDate)
    {
      $this->ShipmentId = $ShipmentId;
      $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
      return $this->ShipmentId;
    }

    /**
     * @param int $ShipmentId
     * @return \PropagoSoap\Shipper
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return ArrayOfShipperDetail
     */
    public function getShipmentDetails()
    {
      return $this->ShipmentDetails;
    }

    /**
     * @param ArrayOfShipperDetail $ShipmentDetails
     * @return \PropagoSoap\Shipper
     */
    public function setShipmentDetails($ShipmentDetails)
    {
      $this->ShipmentDetails = $ShipmentDetails;
      return $this;
    }

    /**
     * @return ArrayOfShipperLine
     */
    public function getShipmentLines()
    {
      return $this->ShipmentLines;
    }

    /**
     * @param ArrayOfShipperLine $ShipmentLines
     * @return \PropagoSoap\Shipper
     */
    public function setShipmentLines($ShipmentLines)
    {
      $this->ShipmentLines = $ShipmentLines;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \PropagoSoap\Shipper
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->ShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipDate
     * @return \PropagoSoap\Shipper
     */
    public function setShipDate(\DateTime $ShipDate)
    {
      $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
      return $this;
    }

}
