<?php

namespace PropagoSoap;

class AcceptNewOrdersResponse
{

    /**
     * @var ServiceResponseOfBoolean $AcceptNewOrdersResult
     */
    protected $AcceptNewOrdersResult = null;

    /**
     * @param ServiceResponseOfBoolean $AcceptNewOrdersResult
     */
    public function __construct($AcceptNewOrdersResult)
    {
      $this->AcceptNewOrdersResult = $AcceptNewOrdersResult;
    }

    /**
     * @return ServiceResponseOfBoolean
     */
    public function getAcceptNewOrdersResult()
    {
      return $this->AcceptNewOrdersResult;
    }

    /**
     * @param ServiceResponseOfBoolean $AcceptNewOrdersResult
     * @return \PropagoSoap\AcceptNewOrdersResponse
     */
    public function setAcceptNewOrdersResult($AcceptNewOrdersResult)
    {
      $this->AcceptNewOrdersResult = $AcceptNewOrdersResult;
      return $this;
    }

}
