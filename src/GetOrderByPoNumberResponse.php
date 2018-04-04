<?php

namespace PropagoSoap;

class GetOrderByPoNumberResponse
{

    /**
     * @var ServiceResponseOfOrder $GetOrderByPoNumberResult
     */
    protected $GetOrderByPoNumberResult = null;

    /**
     * @param ServiceResponseOfOrder $GetOrderByPoNumberResult
     */
    public function __construct($GetOrderByPoNumberResult)
    {
      $this->GetOrderByPoNumberResult = $GetOrderByPoNumberResult;
    }

    /**
     * @return ServiceResponseOfOrder
     */
    public function getGetOrderByPoNumberResult()
    {
      return $this->GetOrderByPoNumberResult;
    }

    /**
     * @param ServiceResponseOfOrder $GetOrderByPoNumberResult
     * @return \PropagoSoap\GetOrderByPoNumberResponse
     */
    public function setGetOrderByPoNumberResult($GetOrderByPoNumberResult)
    {
      $this->GetOrderByPoNumberResult = $GetOrderByPoNumberResult;
      return $this;
    }

}
