<?php

namespace PropagoSoap;

class Order
{

    /**
     * @var User $OrderUser
     */
    protected $OrderUser = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var string $OrderTag
     */
    protected $OrderTag = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $CompanyGuid
     */
    protected $CompanyGuid = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @var float $ShippingAndHandling
     */
    protected $ShippingAndHandling = null;

    /**
     * @var float $Tax
     */
    protected $Tax = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var \DateTime $OrderDate
     */
    protected $OrderDate = null;

    /**
     * @var \DateTime $DesiredShipDate
     */
    protected $DesiredShipDate = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var ShipToAddress $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var BillToAddress $BillingAddress
     */
    protected $BillingAddress = null;

    /**
     * @var ArrayOfOrderLine $Lines
     */
    protected $Lines = null;

    /**
     * @var string $OrderField1
     */
    protected $OrderField1 = null;

    /**
     * @var string $OrderField2
     */
    protected $OrderField2 = null;

    /**
     * @var string $OrderField3
     */
    protected $OrderField3 = null;

    /**
     * @var string $OrderField4
     */
    protected $OrderField4 = null;

    /**
     * @var string $OrderField5
     */
    protected $OrderField5 = null;

    /**
     * @var string $CompanyExternalId1
     */
    protected $CompanyExternalId1 = null;

    /**
     * @var string $CompanyExternalId2
     */
    protected $CompanyExternalId2 = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var ArrayOfCustomField $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @param float $ShippingAndHandling
     * @param float $Tax
     * @param float $Discount
     * @param \DateTime $OrderDate
     * @param \DateTime $DesiredShipDate
     */
    public function __construct($ShippingAndHandling, $Tax, $Discount, \DateTime $OrderDate, \DateTime $DesiredShipDate)
    {
      $this->ShippingAndHandling = $ShippingAndHandling;
      $this->Tax = $Tax;
      $this->Discount = $Discount;
      $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      $this->DesiredShipDate = $DesiredShipDate->format(\DateTime::ATOM);
    }

    /**
     * @return User
     */
    public function getOrderUser()
    {
      return $this->OrderUser;
    }

    /**
     * @param User $OrderUser
     * @return \PropagoSoap\Order
     */
    public function setOrderUser($OrderUser)
    {
      $this->OrderUser = $OrderUser;
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
     * @return \PropagoSoap\Order
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderTag()
    {
      return $this->OrderTag;
    }

    /**
     * @param string $OrderTag
     * @return \PropagoSoap\Order
     */
    public function setOrderTag($OrderTag)
    {
      $this->OrderTag = $OrderTag;
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
     * @return \PropagoSoap\Order
     */
    public function setPoNumber($PoNumber)
    {
      $this->PoNumber = $PoNumber;
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
     * @return \PropagoSoap\Order
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \PropagoSoap\Order
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyGuid()
    {
      return $this->CompanyGuid;
    }

    /**
     * @param string $CompanyGuid
     * @return \PropagoSoap\Order
     */
    public function setCompanyGuid($CompanyGuid)
    {
      $this->CompanyGuid = $CompanyGuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PropagoSoap\Order
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return \PropagoSoap\Order
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingAndHandling()
    {
      return $this->ShippingAndHandling;
    }

    /**
     * @param float $ShippingAndHandling
     * @return \PropagoSoap\Order
     */
    public function setShippingAndHandling($ShippingAndHandling)
    {
      $this->ShippingAndHandling = $ShippingAndHandling;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param float $Tax
     * @return \PropagoSoap\Order
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return \PropagoSoap\Order
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
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
     * @return \PropagoSoap\Order
     */
    public function setOrderDate(\DateTime $OrderDate)
    {
      $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDesiredShipDate()
    {
      if ($this->DesiredShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DesiredShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DesiredShipDate
     * @return \PropagoSoap\Order
     */
    public function setDesiredShipDate(\DateTime $DesiredShipDate)
    {
      $this->DesiredShipDate = $DesiredShipDate->format(\DateTime::ATOM);
      return $this;
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
     * @return \PropagoSoap\Order
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return ShipToAddress
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param ShipToAddress $ShippingAddress
     * @return \PropagoSoap\Order
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
      return $this;
    }

    /**
     * @return BillToAddress
     */
    public function getBillingAddress()
    {
      return $this->BillingAddress;
    }

    /**
     * @param BillToAddress $BillingAddress
     * @return \PropagoSoap\Order
     */
    public function setBillingAddress($BillingAddress)
    {
      $this->BillingAddress = $BillingAddress;
      return $this;
    }

    /**
     * @return ArrayOfOrderLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfOrderLine $Lines
     * @return \PropagoSoap\Order
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderField1()
    {
      return $this->OrderField1;
    }

    /**
     * @param string $OrderField1
     * @return \PropagoSoap\Order
     */
    public function setOrderField1($OrderField1)
    {
      $this->OrderField1 = $OrderField1;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderField2()
    {
      return $this->OrderField2;
    }

    /**
     * @param string $OrderField2
     * @return \PropagoSoap\Order
     */
    public function setOrderField2($OrderField2)
    {
      $this->OrderField2 = $OrderField2;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderField3()
    {
      return $this->OrderField3;
    }

    /**
     * @param string $OrderField3
     * @return \PropagoSoap\Order
     */
    public function setOrderField3($OrderField3)
    {
      $this->OrderField3 = $OrderField3;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderField4()
    {
      return $this->OrderField4;
    }

    /**
     * @param string $OrderField4
     * @return \PropagoSoap\Order
     */
    public function setOrderField4($OrderField4)
    {
      $this->OrderField4 = $OrderField4;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderField5()
    {
      return $this->OrderField5;
    }

    /**
     * @param string $OrderField5
     * @return \PropagoSoap\Order
     */
    public function setOrderField5($OrderField5)
    {
      $this->OrderField5 = $OrderField5;
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
     * @return \PropagoSoap\Order
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
     * @return \PropagoSoap\Order
     */
    public function setCompanyExternalId2($CompanyExternalId2)
    {
      $this->CompanyExternalId2 = $CompanyExternalId2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \PropagoSoap\Order
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return ArrayOfCustomField
     */
    public function getCustomFields()
    {
      return $this->CustomFields;
    }

    /**
     * @param ArrayOfCustomField $CustomFields
     * @return \PropagoSoap\Order
     */
    public function setCustomFields($CustomFields)
    {
      $this->CustomFields = $CustomFields;
      return $this;
    }

}
