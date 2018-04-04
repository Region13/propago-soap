<?php

namespace PropagoSoap;

class AcceptNewOrders
{

    /**
     * @var Credentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ArrayOfString $orderNumbers
     */
    protected $orderNumbers = null;

    /**
     * @param Credentials $credentials
     * @param ArrayOfString $orderNumbers
     */
    public function __construct($credentials, $orderNumbers)
    {
      $this->credentials = $credentials;
      $this->orderNumbers = $orderNumbers;
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
     * @return \PropagoSoap\AcceptNewOrders
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getOrderNumbers()
    {
      return $this->orderNumbers;
    }

    /**
     * @param ArrayOfString $orderNumbers
     * @return \PropagoSoap\AcceptNewOrders
     */
    public function setOrderNumbers($orderNumbers)
    {
      $this->orderNumbers = $orderNumbers;
      return $this;
    }

}
