<?php

namespace PropagoSoap;

class User
{

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \PropagoSoap\User
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \PropagoSoap\User
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \PropagoSoap\User
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

}
