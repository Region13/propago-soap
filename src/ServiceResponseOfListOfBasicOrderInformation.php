<?php

namespace PropagoSoap;

class ServiceResponseOfListOfBasicOrderInformation
{

    /**
     * @var ServiceReturnCode $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var ArrayOfBasicOrderInformation $Data
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
     * @return \PropagoSoap\ServiceResponseOfListOfBasicOrderInformation
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return ArrayOfBasicOrderInformation
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfBasicOrderInformation $Data
     * @return \PropagoSoap\ServiceResponseOfListOfBasicOrderInformation
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
     * @return \PropagoSoap\ServiceResponseOfListOfBasicOrderInformation
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
     * @return \PropagoSoap\ServiceResponseOfListOfBasicOrderInformation
     */
    public function setErrorGuid($ErrorGuid)
    {
      $this->ErrorGuid = $ErrorGuid;
      return $this;
    }

}
