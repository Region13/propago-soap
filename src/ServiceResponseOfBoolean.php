<?php

namespace PropagoSoap;

class ServiceResponseOfBoolean
{

    /**
     * @var ServiceReturnCode $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var boolean $Data
     */
    protected $Data = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $ErrorGuid
     */
    protected $ErrorGuid = null;

    /**
     * @param ServiceReturnCode $ReturnCode
     * @param boolean $Data
     */
    public function __construct($ReturnCode, $Data)
    {
      $this->ReturnCode = $ReturnCode;
      $this->Data = $Data;
    }

    /**
     * @return ServiceReturnCode
     */
    public function getReturnCode()
    {
      return $this->ReturnCode;
    }

    /**
     * @param ServiceReturnCode $ReturnCode
     * @return \PropagoSoap\ServiceResponseOfBoolean
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param boolean $Data
     * @return \PropagoSoap\ServiceResponseOfBoolean
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \PropagoSoap\ServiceResponseOfBoolean
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorGuid()
    {
      return $this->ErrorGuid;
    }

    /**
     * @param string $ErrorGuid
     * @return \PropagoSoap\ServiceResponseOfBoolean
     */
    public function setErrorGuid($ErrorGuid)
    {
      $this->ErrorGuid = $ErrorGuid;
      return $this;
    }

}
