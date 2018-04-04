<?php

namespace PropagoSoap;

class GetShippingInformationResponse
{

    /**
     * @var ServiceResponseOfListOfShipper $GetShippingInformationResult
     */
    protected $GetShippingInformationResult = null;

    /**
     * @param ServiceResponseOfListOfShipper $GetShippingInformationResult
     */
    public function __construct($GetShippingInformationResult)
    {
      $this->GetShippingInformationResult = $GetShippingInformationResult;
    }

    /**
     * @return ServiceResponseOfListOfShipper
     */
    public function getGetShippingInformationResult()
    {
      return $this->GetShippingInformationResult;
    }

    /**
     * @param ServiceResponseOfListOfShipper $GetShippingInformationResult
     * @return \PropagoSoap\GetShippingInformationResponse
     */
    public function setGetShippingInformationResult($GetShippingInformationResult)
    {
      $this->GetShippingInformationResult = $GetShippingInformationResult;
      return $this;
    }

}
