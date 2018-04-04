<?php

namespace PropagoSoap;

class SearchOrders
{

    /**
     * @var Credentials $credentials
     */
    protected $credentials = null;

    /**
     * @var OrderSearch $searchFilter
     */
    protected $searchFilter = null;

    /**
     * @param Credentials $credentials
     * @param OrderSearch $searchFilter
     */
    public function __construct($credentials, $searchFilter)
    {
      $this->credentials = $credentials;
      $this->searchFilter = $searchFilter;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
      return $this->credentials;
    }

    /**
     * @param Credentials $credentials
     * @return \PropagoSoap\SearchOrders
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

    /**
     * @return OrderSearch
     */
    public function getSearchFilter()
    {
      return $this->searchFilter;
    }

    /**
     * @param OrderSearch $searchFilter
     * @return \PropagoSoap\SearchOrders
     */
    public function setSearchFilter($searchFilter)
    {
      $this->searchFilter = $searchFilter;
      return $this;
    }

}
