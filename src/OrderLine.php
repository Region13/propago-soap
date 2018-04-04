<?php

namespace PropagoSoap;

class OrderLine
{

    /**
     * @var string $LineId
     */
    protected $LineId = null;

    /**
     * @var int $VendorId
     */
    protected $VendorId = null;

    /**
     * @var int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var EnumOrderLineStatus $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $EstimatedShipDate
     */
    protected $EstimatedShipDate = null;

    /**
     * @var string $Sku
     */
    protected $Sku = null;

    /**
     * @var string $PrintFileUrl
     */
    protected $PrintFileUrl = null;

    /**
     * @var string $ListFilUrl
     */
    protected $ListFilUrl = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $FileUrl
     */
    protected $FileUrl = null;

    /**
     * @var string $Thumbnail
     */
    protected $Thumbnail = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var LinePart $Part
     */
    protected $Part = null;

    /**
     * @var string $Custom01
     */
    protected $Custom01 = null;

    /**
     * @var string $Custom02
     */
    protected $Custom02 = null;

    /**
     * @var string $Custom03
     */
    protected $Custom03 = null;

    /**
     * @var float $FulfillCharge
     */
    protected $FulfillCharge = null;

    /**
     * @var float $RevenueCost
     */
    protected $RevenueCost = null;

    /**
     * @var float $FlatFee
     */
    protected $FlatFee = null;

    /**
     * @var string $FlatFeeLabel
     */
    protected $FlatFeeLabel = null;

    /**
     * @var float $SalesTax
     */
    protected $SalesTax = null;

    /**
     * @var string $ProducingPartner
     */
    protected $ProducingPartner = null;

    /**
     * @param int $LineNumber
     * @param float $Price
     * @param EnumOrderLineStatus $Status
     * @param \DateTime $EstimatedShipDate
     * @param int $Quantity
     * @param float $UnitPrice
     * @param float $FulfillCharge
     */
    public function __construct($LineNumber, $Price, $Status, \DateTime $EstimatedShipDate, $Quantity, $UnitPrice, $FulfillCharge)
    {
      $this->LineNumber = $LineNumber;
      $this->Price = $Price;
      $this->Status = $Status;
      $this->EstimatedShipDate = $EstimatedShipDate->format(\DateTime::ATOM);
      $this->Quantity = $Quantity;
      $this->UnitPrice = $UnitPrice;
      $this->FulfillCharge = $FulfillCharge;
    }

    /**
     * @return string
     */
    public function getLineId()
    {
      return $this->LineId;
    }

    /**
     * @param string $LineId
     * @return \PropagoSoap\OrderLine
     */
    public function setLineId($LineId)
    {
      $this->LineId = $LineId;
      return $this;
    }

    /**
     * @return int
     */
    public function getVendorId()
    {
      return $this->VendorId;
    }

    /**
     * @param int $VendorId
     * @return \PropagoSoap\OrderLine
     */
    public function setVendorId($VendorId)
    {
      $this->VendorId = $VendorId;
      return $this;
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
     * @return \PropagoSoap\OrderLine
     */
    public function setLineNumber($LineNumber)
    {
      $this->LineNumber = $LineNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \PropagoSoap\OrderLine
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return EnumOrderLineStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param EnumOrderLineStatus $Status
     * @return \PropagoSoap\OrderLine
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedShipDate()
    {
      if ($this->EstimatedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EstimatedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EstimatedShipDate
     * @return \PropagoSoap\OrderLine
     */
    public function setEstimatedShipDate(\DateTime $EstimatedShipDate)
    {
      $this->EstimatedShipDate = $EstimatedShipDate->format(\DateTime::ATOM);
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
     * @return \PropagoSoap\OrderLine
     */
    public function setSku($Sku)
    {
      $this->Sku = $Sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintFileUrl()
    {
      return $this->PrintFileUrl;
    }

    /**
     * @param string $PrintFileUrl
     * @return \PropagoSoap\OrderLine
     */
    public function setPrintFileUrl($PrintFileUrl)
    {
      $this->PrintFileUrl = $PrintFileUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getListFilUrl()
    {
      return $this->ListFilUrl;
    }

    /**
     * @param string $ListFilUrl
     * @return \PropagoSoap\OrderLine
     */
    public function setListFilUrl($ListFilUrl)
    {
      $this->ListFilUrl = $ListFilUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \PropagoSoap\OrderLine
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileUrl()
    {
      return $this->FileUrl;
    }

    /**
     * @param string $FileUrl
     * @return \PropagoSoap\OrderLine
     */
    public function setFileUrl($FileUrl)
    {
      $this->FileUrl = $FileUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
      return $this->Thumbnail;
    }

    /**
     * @param string $Thumbnail
     * @return \PropagoSoap\OrderLine
     */
    public function setThumbnail($Thumbnail)
    {
      $this->Thumbnail = $Thumbnail;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return \PropagoSoap\OrderLine
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return LinePart
     */
    public function getPart()
    {
      return $this->Part;
    }

    /**
     * @param LinePart $Part
     * @return \PropagoSoap\OrderLine
     */
    public function setPart($Part)
    {
      $this->Part = $Part;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom01()
    {
      return $this->Custom01;
    }

    /**
     * @param string $Custom01
     * @return \PropagoSoap\OrderLine
     */
    public function setCustom01($Custom01)
    {
      $this->Custom01 = $Custom01;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom02()
    {
      return $this->Custom02;
    }

    /**
     * @param string $Custom02
     * @return \PropagoSoap\OrderLine
     */
    public function setCustom02($Custom02)
    {
      $this->Custom02 = $Custom02;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom03()
    {
      return $this->Custom03;
    }

    /**
     * @param string $Custom03
     * @return \PropagoSoap\OrderLine
     */
    public function setCustom03($Custom03)
    {
      $this->Custom03 = $Custom03;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillCharge()
    {
      return $this->FulfillCharge;
    }

    /**
     * @param float $FulfillCharge
     * @return \PropagoSoap\OrderLine
     */
    public function setFulfillCharge($FulfillCharge)
    {
      $this->FulfillCharge = $FulfillCharge;
      return $this;
    }

    /**
     * @return float
     */
    public function getRevenueCost()
    {
      return $this->RevenueCost;
    }

    /**
     * @param float $RevenueCost
     * @return \PropagoSoap\OrderLine
     */
    public function setRevenueCost($RevenueCost)
    {
      $this->RevenueCost = $RevenueCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getFlatFee()
    {
      return $this->FlatFee;
    }

    /**
     * @param float $FlatFee
     * @return \PropagoSoap\OrderLine
     */
    public function setFlatFee($FlatFee)
    {
      $this->FlatFee = $FlatFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlatFeeLabel()
    {
      return $this->FlatFeeLabel;
    }

    /**
     * @param string $FlatFeeLabel
     * @return \PropagoSoap\OrderLine
     */
    public function setFlatFeeLabel($FlatFeeLabel)
    {
      $this->FlatFeeLabel = $FlatFeeLabel;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesTax()
    {
      return $this->SalesTax;
    }

    /**
     * @param float $SalesTax
     * @return \PropagoSoap\OrderLine
     */
    public function setSalesTax($SalesTax)
    {
      $this->SalesTax = $SalesTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getProducingPartner()
    {
      return $this->ProducingPartner;
    }

    /**
     * @param string $ProducingPartner
     * @return \PropagoSoap\OrderLine
     */
    public function setProducingPartner($ProducingPartner)
    {
      $this->ProducingPartner = $ProducingPartner;
      return $this;
    }

}
