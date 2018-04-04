<?php

namespace PropagoSoap;

class ServiceResponseOfListOfShipper
{

    /**
     * @var ServiceReturnCode $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var ArrayOfShipper $Data
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
     * @return \PropagoSoap\ServiceResponseOfListOfShipper
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return ArrayOfShipper
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfShipper $Data
     * @return \PropagoSoap\ServiceResponseOfListOfShipper
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
     * @return \PropagoSoap\ServiceResponseOfListOfShipper
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
     * @return \PropagoSoap\ServiceResponseOfListOfShipper
     */
    public function setErrorGuid($ErrorGuid)
    {
      $this->ErrorGuid = $ErrorGuid;
      return $this;
    }

}
