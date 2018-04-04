<?php

namespace PropagoSoap;

class GetOrderDetailsResponse
{

    /**
     * @var ServiceResponseOfOrder $GetOrderDetailsResult
     */
    protected $GetOrderDetailsResult = null;

    /**
     * @param ServiceResponseOfOrder $GetOrderDetailsResult
     */
    public function __construct($GetOrderDetailsResult)
    {
      $this->GetOrderDetailsResult = $GetOrderDetailsResult;
    }

    /**
     * @return ServiceResponseOfOrder
     */
    public function getGetOrderDetailsResult()
    {
      return $this->GetOrderDetailsResult;
    }

    /**
     * @param ServiceResponseOfOrder $GetOrderDetailsResult
     * @return \PropagoSoap\GetOrderDetailsResponse
     */
    public function setGetOrderDetailsResult($GetOrderDetailsResult)
    {
      $this->GetOrderDetailsResult = $GetOrderDetailsResult;
      return $this;
    }

}
