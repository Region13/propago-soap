<?php

namespace PropagoSoap;

class Credentials
{

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $ApiKey
     */
    protected $ApiKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return \PropagoSoap\Credentials
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
      return $this->ApiKey;
    }

    /**
     * @param string $ApiKey
     * @return \PropagoSoap\Credentials
     */
    public function setApiKey($ApiKey)
    {
      $this->ApiKey = $ApiKey;
      return $this;
    }

}
