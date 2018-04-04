<?php

namespace PropagoSoap;

class ShipperLine
{

    /**
     * @var int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var string $Sku
     */
    protected $Sku = null;

    /**
     * @var int $QuantityShipped
     */
    protected $QuantityShipped = null;

    /**
     * @var ArrayOfSerializationInfo $Serials
     */
    protected $Serials = null;

    /**
     * @param int $LineNumber
     * @param int $QuantityShipped
     */
    public function __construct($LineNumber, $QuantityShipped)
    {
      $this->LineNumber = $LineNumber;
      $this->QuantityShipped = $QuantityShipped;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
      return $this->LineNumber;
    }

    /**
     * @param int $LineNumber
     * @return \PropagoSoap\ShipperLine
     */
    public function setLineNumber($LineNumber)
    {
      $this->LineNumber = $LineNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
      return $this->Sku;
    }

    /**
     * @param string $Sku
     * @return \PropagoSoap\ShipperLine
     */
    public function setSku($Sku)
    {
      $this->Sku = $Sku;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityShipped()
    {
      return $this->QuantityShipped;
    }

    /**
     * @param int $QuantityShipped
     * @return \PropagoSoap\ShipperLine
     */
    public function setQuantityShipped($QuantityShipped)
    {
      $this->QuantityShipped = $QuantityShipped;
      return $this;
    }

    /**
     * @return ArrayOfSerializationInfo
     */
    public function getSerials()
    {
      return $this->Serials;
    }

    /**
     * @param ArrayOfSerializationInfo $Serials
     * @return \PropagoSoap\ShipperLine
     */
    public function setSerials($Serials)
    {
      $this->Serials = $Serials;
      return $this;
    }

}
