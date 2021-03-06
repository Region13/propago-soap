<?php

namespace PropagoSoap;

class GetShippingInformation
{

    /**
     * @var Credentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @param Credentials $credentials
     * @param string $orderNumber
     */
    public function __construct($credentials, $orderNumber)
    {
      $this->credentials = $credentials;
      $this->orderNumber = $orderNumber;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
      return $this->credentials;
    }

    /**
     * @param Credentials $credentials
     * @return \PropagoSoap\GetShippingInformation
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \PropagoSoap\GetShippingInformation
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

}
