<?php

namespace PropagoSoap;

class SubmitOrder
{

    /**
     * @var Credentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Order $order
     */
    protected $order = null;

    /**
     * @param Credentials $credentials
     * @param Order $order
     */
    public function __construct($credentials, $order)
    {
      $this->credentials = $credentials;
      $this->order = $order;
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
     * @return \PropagoSoap\SubmitOrder
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param Order $order
     * @return \PropagoSoap\SubmitOrder
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}
