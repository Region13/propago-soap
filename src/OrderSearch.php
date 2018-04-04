<?php

namespace PropagoSoap;

class OrderSearch
{

    /**
     * @var int $Skip
     */
    protected $Skip = null;

    /**
     * @var int $Take
     */
    protected $Take = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var \DateTime $OrderSubmittedStartDate
     */
    protected $OrderSubmittedStartDate = null;

    /**
     * @var \DateTime $OrderSubmittedEndDate
     */
    protected $OrderSubmittedEndDate = null;

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
     * @var string $Custom04
     */
    protected $Custom04 = null;

    /**
     * @var string $Custom05
     */
    protected $Custom05 = null;

    /**
     * @var string $OrderTag
     */
    protected $OrderTag = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

    /**
     * @var string $CompanyExternalId1
     */
    protected $CompanyExternalId1 = null;

    /**
     * @var string $CompanyExternalId2
     */
    protected $CompanyExternalId2 = null;

    /**
     * @var SearchOrderStatus $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfSearchOrderStatus $ExplicitStatus
     */
    protected $ExplicitStatus = null;

    /**
     * @var boolean $IsTransmitted
     */
    protected $IsTransmitted = null;

    /**
     * @param int $Skip
     * @param int $Take
     */
    public function __construct($Skip, $Take)
    {
      $this->Skip = $Skip;
      $this->Take = $Take;
    }

    /**
     * @return int
     */
    public function getSkip()
    {
      return $this->Skip;
    }

    /**
     * @param int $Skip
     * @return \PropagoSoap\OrderSearch
     */
    public function setSkip($Skip)
    {
      $this->Skip = $Skip;
      return $this;
    }

    /**
     * @return int
     */
    public function getTake()
    {
      return $this->Take;
    }

    /**
     * @param int $Take
     * @return \PropagoSoap\OrderSearch
     */
    public function setTake($Take)
    {
      $this->Take = $Take;
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
     * @return \PropagoSoap\OrderSearch
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderSubmittedStartDate()
    {
      if ($this->OrderSubmittedStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderSubmittedStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderSubmittedStartDate
     * @return \PropagoSoap\OrderSearch
     */
    public function setOrderSubmittedStartDate(\DateTime $OrderSubmittedStartDate = null)
    {
      if ($OrderSubmittedStartDate == null) {
       $this->OrderSubmittedStartDate = null;
      } else {
        $this->OrderSubmittedStartDate = $OrderSubmittedStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderSubmittedEndDate()
    {
      if ($this->OrderSubmittedEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderSubmittedEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderSubmittedEndDate
     * @return \PropagoSoap\OrderSearch
     */
    public function setOrderSubmittedEndDate(\DateTime $OrderSubmittedEndDate = null)
    {
      if ($OrderSubmittedEndDate == null) {
       $this->OrderSubmittedEndDate = null;
      } else {
        $this->OrderSubmittedEndDate = $OrderSubmittedEndDate->format(\DateTime::ATOM);
      }
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
     * @return \PropagoSoap\OrderSearch
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
     * @return \PropagoSoap\OrderSearch
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
     * @return \PropagoSoap\OrderSearch
     */
    public function setCustom03($Custom03)
    {
      $this->Custom03 = $Custom03;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom04()
    {
      return $this->Custom04;
    }

    /**
     * @param string $Custom04
     * @return \PropagoSoap\OrderSearch
     */
    public function setCustom04($Custom04)
    {
      $this->Custom04 = $Custom04;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustom05()
    {
      return $this->Custom05;
    }

    /**
     * @param string $Custom05
     * @return \PropagoSoap\OrderSearch
     */
    public function setCustom05($Custom05)
    {
      $this->Custom05 = $Custom05;
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
     * @return \PropagoSoap\OrderSearch
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
     * @return \PropagoSoap\OrderSearch
     */
    public function setPoNumber($PoNumber)
    {
      $this->PoNumber = $PoNumber;
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
     * @return \PropagoSoap\OrderSearch
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
     * @return \PropagoSoap\OrderSearch
     */
    public function setCompanyExternalId2($CompanyExternalId2)
    {
      $this->CompanyExternalId2 = $CompanyExternalId2;
      return $this;
    }

    /**
     * @return SearchOrderStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param SearchOrderStatus $Status
     * @return \PropagoSoap\OrderSearch
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfSearchOrderStatus
     */
    public function getExplicitStatus()
    {
      return $this->ExplicitStatus;
    }

    /**
     * @param ArrayOfSearchOrderStatus $ExplicitStatus
     * @return \PropagoSoap\OrderSearch
     */
    public function setExplicitStatus($ExplicitStatus)
    {
      $this->ExplicitStatus = $ExplicitStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTransmitted()
    {
      return $this->IsTransmitted;
    }

    /**
     * @param boolean $IsTransmitted
     * @return \PropagoSoap\OrderSearch
     */
    public function setIsTransmitted($IsTransmitted)
    {
      $this->IsTransmitted = $IsTransmitted;
      return $this;
    }

}
