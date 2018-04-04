<?php

namespace PropagoSoap;

class BasicOrderInformation
{

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var \DateTime $OrderDate
     */
    protected $OrderDate = null;

    /**
     * @var OrderStatus $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

    /**
     * @param \DateTime $OrderDate
     * @param OrderStatus $OrderStatus
     */
    public function __construct(\DateTime $OrderDate, $OrderStatus)
    {
      $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      $this->OrderStatus = $OrderStatus;
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
     * @return \PropagoSoap\BasicOrderInformation
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
      if ($this->OrderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderDate
     * @return \PropagoSoap\BasicOrderInformation
     */
    public function setOrderDate(\DateTime $OrderDate)
    {
      $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return OrderStatus
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatus $OrderStatus
     * @return \PropagoSoap\BasicOrderInformation
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->PoNumber;
    }

    /**
     * @param string $PoNumber
     * @return \PropagoSoap\BasicOrderInformation
     */
    public function setPoNumber($PoNumber)
    {
      $this->PoNumber = $PoNumber;
      return $this;
    }

}
