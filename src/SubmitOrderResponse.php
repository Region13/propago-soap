<?php

namespace PropagoSoap;

class SubmitOrderResponse
{

    /**
     * @var ServiceResponseOfString $SubmitOrderResult
     */
    protected $SubmitOrderResult = null;

    /**
     * @param ServiceResponseOfString $SubmitOrderResult
     */
    public function __construct($SubmitOrderResult)
    {
      $this->SubmitOrderResult = $SubmitOrderResult;
    }

    /**
     * @return ServiceResponseOfString
     */
    public function getSubmitOrderResult()
    {
      return $this->SubmitOrderResult;
    }

    /**
     * @param ServiceResponseOfString $SubmitOrderResult
     * @return \PropagoSoap\SubmitOrderResponse
     */
    public function setSubmitOrderResult($SubmitOrderResult)
    {
      $this->SubmitOrderResult = $SubmitOrderResult;
      return $this;
    }

}
