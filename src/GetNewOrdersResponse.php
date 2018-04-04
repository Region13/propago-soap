<?php

namespace PropagoSoap;

class GetNewOrdersResponse
{

    /**
     * @var ServiceResponseOfListOfOrder $GetNewOrdersResult
     */
    protected $GetNewOrdersResult = null;

    /**
     * @param ServiceResponseOfListOfOrder $GetNewOrdersResult
     */
    public function __construct($GetNewOrdersResult)
    {
      $this->GetNewOrdersResult = $GetNewOrdersResult;
    }

    /**
     * @return ServiceResponseOfListOfOrder
     */
    public function getGetNewOrdersResult()
    {
      return $this->GetNewOrdersResult;
    }

    /**
     * @param ServiceResponseOfListOfOrder $GetNewOrdersResult
     * @return \PropagoSoap\GetNewOrdersResponse
     */
    public function setGetNewOrdersResult($GetNewOrdersResult)
    {
      $this->GetNewOrdersResult = $GetNewOrdersResult;
      return $this;
    }

}
