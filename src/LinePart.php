<?php

namespace PropagoSoap;

class LinePart
{

    /**
     * @var int $PageCount
     */
    protected $PageCount = null;

    /**
     * @var float $FinishedWidth
     */
    protected $FinishedWidth = null;

    /**
     * @var float $FinishedHieght
     */
    protected $FinishedHieght = null;

    /**
     * @var string $Stock
     */
    protected $Stock = null;

    /**
     * @var string $PrintSpec
     */
    protected $PrintSpec = null;

    /**
     * @var string $FormNo
     */
    protected $FormNo = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $ItemType
     */
    protected $ItemType = null;

    /**
     * @var string $Manufacturer
     */
    protected $Manufacturer = null;

    /**
     * @var string $ClientCode
     */
    protected $ClientCode = null;

    /**
     * @var string $InternalPartId
     */
    protected $InternalPartId = null;

    /**
     * @var string $VendorSku
     */
    protected $VendorSku = null;

    /**
     * @var string $Sku
     */
    protected $Sku = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var string $CompanyExternalId1
     */
    protected $CompanyExternalId1 = null;

    /**
     * @var string $CompanyExternalId2
     */
    protected $CompanyExternalId2 = null;

    /**
     * @param int $PageCount
     * @param float $FinishedWidth
     * @param float $FinishedHieght
     */
    public function __construct($PageCount, $FinishedWidth, $FinishedHieght)
    {
      $this->PageCount = $PageCount;
      $this->FinishedWidth = $FinishedWidth;
      $this->FinishedHieght = $FinishedHieght;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
      return $this->PageCount;
    }

    /**
     * @param int $PageCount
     * @return \PropagoSoap\LinePart
     */
    public function setPageCount($PageCount)
    {
      $this->PageCount = $PageCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getFinishedWidth()
    {
      return $this->FinishedWidth;
    }

    /**
     * @param float $FinishedWidth
     * @return \PropagoSoap\LinePart
     */
    public function setFinishedWidth($FinishedWidth)
    {
      $this->FinishedWidth = $FinishedWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getFinishedHieght()
    {
      return $this->FinishedHieght;
    }

    /**
     * @param float $FinishedHieght
     * @return \PropagoSoap\LinePart
     */
    public function setFinishedHieght($FinishedHieght)
    {
      $this->FinishedHieght = $FinishedHieght;
      return $this;
    }

    /**
     * @return string
     */
    public function getStock()
    {
      return $this->Stock;
    }

    /**
     * @param string $Stock
     * @return \PropagoSoap\LinePart
     */
    public function setStock($Stock)
    {
      $this->Stock = $Stock;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintSpec()
    {
      return $this->PrintSpec;
    }

    /**
     * @param string $PrintSpec
     * @return \PropagoSoap\LinePart
     */
    public function setPrintSpec($PrintSpec)
    {
      $this->PrintSpec = $PrintSpec;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormNo()
    {
      return $this->FormNo;
    }

    /**
     * @param string $FormNo
     * @return \PropagoSoap\LinePart
     */
    public function setFormNo($FormNo)
    {
      $this->FormNo = $FormNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
      return $this->CommodityCode;
    }

    /**
     * @param string $CommodityCode
     * @return \PropagoSoap\LinePart
     */
    public function setCommodityCode($CommodityCode)
    {
      $this->CommodityCode = $CommodityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemType()
    {
      return $this->ItemType;
    }

    /**
     * @param string $ItemType
     * @return \PropagoSoap\LinePart
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
      return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     * @return \PropagoSoap\LinePart
     */
    public function setManufacturer($Manufacturer)
    {
      $this->Manufacturer = $Manufacturer;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientCode()
    {
      return $this->ClientCode;
    }

    /**
     * @param string $ClientCode
     * @return \PropagoSoap\LinePart
     */
    public function setClientCode($ClientCode)
    {
      $this->ClientCode = $ClientCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalPartId()
    {
      return $this->InternalPartId;
    }

    /**
     * @param string $InternalPartId
     * @return \PropagoSoap\LinePart
     */
    public function setInternalPartId($InternalPartId)
    {
      $this->InternalPartId = $InternalPartId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorSku()
    {
      return $this->VendorSku;
    }

    /**
     * @param string $VendorSku
     * @return \PropagoSoap\LinePart
     */
    public function setVendorSku($VendorSku)
    {
      $this->VendorSku = $VendorSku;
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
     * @return \PropagoSoap\LinePart
     */
    public function setSku($Sku)
    {
      $this->Sku = $Sku;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \PropagoSoap\LinePart
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyExternalId1()
    {
      return $this->CompanyExternalId1;
    }

    /**
     * @param string $CompanyExternalId1
     * @return \PropagoSoap\LinePart
     */
    public function setCompanyExternalId1($CompanyExternalId1)
    {
      $this->CompanyExternalId1 = $CompanyExternalId1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyExternalId2()
    {
      return $this->CompanyExternalId2;
    }

    /**
     * @param string $CompanyExternalId2
     * @return \PropagoSoap\LinePart
     */
    public function setCompanyExternalId2($CompanyExternalId2)
    {
      $this->CompanyExternalId2 = $CompanyExternalId2;
      return $this;
    }

}
