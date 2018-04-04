<?php

namespace PropagoSoap;

class ServiceResponseOfOrder
{

    /**
     * @var ServiceReturnCode $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var Order $Data
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
     * @return \PropagoSoap\ServiceResponseOfOrder
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return Order
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param Order $Data
     * @return \PropagoSoap\ServiceResponseOfOrder
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
     * @return \PropagoSoap\ServiceResponseOfOrder
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
     * @return \PropagoSoap\ServiceResponseOfOrder
     */
    public function setErrorGuid($ErrorGuid)
    {
      $this->ErrorGuid = $ErrorGuid;
      return $this;
    }

}
