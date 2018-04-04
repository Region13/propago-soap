<?php

namespace PropagoSoap;

class PagedServiceResponseOfBasicOrderInformation extends ServiceResponseOfListOfBasicOrderInformation
{

    /**
     * @var int $TotalRecords
     */
    protected $TotalRecords = null;

    /**
     * @var int $Skip
     */
    protected $Skip = null;

    /**
     * @var int $Take
     */
    protected $Take = null;

    /**
     * @param ServiceReturnCode $ReturnCode
     * @param int $TotalRecords
     * @param int $Skip
     * @param int $Take
     */
    public function __construct($ReturnCode, $TotalRecords, $Skip, $Take)
    {
      parent::__construct($ReturnCode);
      $this->TotalRecords = $TotalRecords;
      $this->Skip = $Skip;
      $this->Take = $Take;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->TotalRecords;
    }

    /**
     * @param int $TotalRecords
     * @return \PropagoSoap\PagedServiceResponseOfBasicOrderInformation
     */
    public function setTotalRecords($TotalRecords)
    {
      $this->TotalRecords = $TotalRecords;
      return $this;
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
     * @return \PropagoSoap\PagedServiceResponseOfBasicOrderInformation
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
     * @return \PropagoSoap\PagedServiceResponseOfBasicOrderInformation
     */
    public function setTake($Take)
    {
      $this->Take = $Take;
      return $this;
    }

}
