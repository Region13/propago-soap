<?php

namespace PropagoSoap;

class SearchOrdersResponse
{

    /**
     * @var PagedServiceResponseOfBasicOrderInformation $SearchOrdersResult
     */
    protected $SearchOrdersResult = null;

    /**
     * @param PagedServiceResponseOfBasicOrderInformation $SearchOrdersResult
     */
    public function __construct($SearchOrdersResult)
    {
      $this->SearchOrdersResult = $SearchOrdersResult;
    }

    /**
     * @return PagedServiceResponseOfBasicOrderInformation
     */
    public function getSearchOrdersResult()
    {
      return $this->SearchOrdersResult;
    }

    /**
     * @param PagedServiceResponseOfBasicOrderInformation $SearchOrdersResult
     * @return \PropagoSoap\SearchOrdersResponse
     */
    public function setSearchOrdersResult($SearchOrdersResult)
    {
      $this->SearchOrdersResult = $SearchOrdersResult;
      return $this;
    }

}
