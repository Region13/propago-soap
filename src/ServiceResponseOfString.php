<?php

namespace PropagoSoap;

class ServiceResponseOfString
{

    /**
     * @var ServiceReturnCode $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var string $Data
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
     */
    public function __construct($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
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
     * @return \PropagoSoap\ServiceResponseOfString
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param string $Data
     * @return \PropagoSoap\ServiceResponseOfString
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
     * @return \PropagoSoap\ServiceResponseOfString
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
     * @return \PropagoSoap\ServiceResponseOfString
     */
    public function setErrorGuid($ErrorGuid)
    {
      $this->ErrorGuid = $ErrorGuid;
      return $this;
    }

}
