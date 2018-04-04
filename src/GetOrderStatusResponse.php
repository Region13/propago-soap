<?php

namespace PropagoSoap;

class GetOrderStatusResponse
{

    /**
     * @var ServiceResponseOfOrderStatus $GetOrderStatusResult
     */
    protected $GetOrderStatusResult = null;

    /**
     * @param ServiceResponseOfOrderStatus $GetOrderStatusResult
     */
    public function __construct($GetOrderStatusResult)
    {
      $this->GetOrderStatusResult = $GetOrderStatusResult;
    }

    /**
     * @return ServiceResponseOfOrderStatus
     */
    public function getGetOrderStatusResult()
    {
      return $this->GetOrderStatusResult;
    }

    /**
     * @param ServiceResponseOfOrderStatus $GetOrderStatusResult
     * @return \PropagoSoap\GetOrderStatusResponse
     */
    public function setGetOrderStatusResult($GetOrderStatusResult)
    {
      $this->GetOrderStatusResult = $GetOrderStatusResult;
      return $this;
    }

}
