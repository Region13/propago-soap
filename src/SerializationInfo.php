<?php

namespace PropagoSoap;

class SerializationInfo
{

    /**
     * @var string $SerialNumber1
     */
    protected $SerialNumber1 = null;

    /**
     * @var string $SerialNumber2
     */
    protected $SerialNumber2 = null;

    /**
     * @var string $SerialNumber3
     */
    protected $SerialNumber3 = null;

    /**
     * @var string $SerialNumber4
     */
    protected $SerialNumber4 = null;

    /**
     * @var string $SerialNumber5
     */
    protected $SerialNumber5 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSerialNumber1()
    {
      return $this->SerialNumber1;
    }

    /**
     * @param string $SerialNumber1
     * @return \PropagoSoap\SerializationInfo
     */
    public function setSerialNumber1($SerialNumber1)
    {
      $this->SerialNumber1 = $SerialNumber1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber2()
    {
      return $this->SerialNumber2;
    }

    /**
     * @param string $SerialNumber2
     * @return \PropagoSoap\SerializationInfo
     */
    public function setSerialNumber2($SerialNumber2)
    {
      $this->SerialNumber2 = $SerialNumber2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber3()
    {
      return $this->SerialNumber3;
    }

    /**
     * @param string $SerialNumber3
     * @return \PropagoSoap\SerializationInfo
     */
    public function setSerialNumber3($SerialNumber3)
    {
      $this->SerialNumber3 = $SerialNumber3;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber4()
    {
      return $this->SerialNumber4;
    }

    /**
     * @param string $SerialNumber4
     * @return \PropagoSoap\SerializationInfo
     */
    public function setSerialNumber4($SerialNumber4)
    {
      $this->SerialNumber4 = $SerialNumber4;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber5()
    {
      return $this->SerialNumber5;
    }

    /**
     * @param string $SerialNumber5
     * @return \PropagoSoap\SerializationInfo
     */
    public function setSerialNumber5($SerialNumber5)
    {
      $this->SerialNumber5 = $SerialNumber5;
      return $this;
    }

}
