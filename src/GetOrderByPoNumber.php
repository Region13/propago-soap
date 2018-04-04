<?php

namespace PropagoSoap;

class GetOrderByPoNumber
{

    /**
     * @var Credentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $purchaseOrderNumber
     */
    protected $purchaseOrderNumber = null;

    /**
     * @param Credentials $credentials
     * @param string $purchaseOrderNumber
     */
    public function __construct($credentials, $purchaseOrderNumber)
    {
      $this->credentials = $credentials;
      $this->purchaseOrderNumber = $purchaseOrderNumber;
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
     * @return \PropagoSoap\GetOrderByPoNumber
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->purchaseOrderNumber;
    }

    /**
     * @param string $purchaseOrderNumber
     * @return \PropagoSoap\GetOrderByPoNumber
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
      $this->purchaseOrderNumber = $purchaseOrderNumber;
      return $this;
    }

}
