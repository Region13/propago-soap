<?php

namespace PropagoSoap;

class GetNewOrders
{

    /**
     * @var Credentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $maxOrders
     */
    protected $maxOrders = null;

    /**
     * @param Credentials $credentials
     * @param int $maxOrders
     */
    public function __construct($credentials, $maxOrders)
    {
      $this->credentials = $credentials;
      $this->maxOrders = $maxOrders;
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
     * @return \PropagoSoap\GetNewOrders
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOrders()
    {
      return $this->maxOrders;
    }

    /**
     * @param int $maxOrders
     * @return \PropagoSoap\GetNewOrders
     */
    public function setMaxOrders($maxOrders)
    {
      $this->maxOrders = $maxOrders;
      return $this;
    }

}
