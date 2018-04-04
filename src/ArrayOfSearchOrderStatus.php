<?php

namespace PropagoSoap;

class ArrayOfSearchOrderStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SearchOrderStatus[] $SearchOrderStatus
     */
    protected $SearchOrderStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchOrderStatus[]
     */
    public function getSearchOrderStatus()
    {
      return $this->SearchOrderStatus;
    }

    /**
     * @param SearchOrderStatus[] $SearchOrderStatus
     * @return \PropagoSoap\ArrayOfSearchOrderStatus
     */
    public function setSearchOrderStatus(array $SearchOrderStatus = null)
    {
      $this->SearchOrderStatus = $SearchOrderStatus;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->SearchOrderStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SearchOrderStatus
     */
    public function offsetGet($offset)
    {
      return $this->SearchOrderStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SearchOrderStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SearchOrderStatus[] = $value;
      } else {
        $this->SearchOrderStatus[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SearchOrderStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SearchOrderStatus Return the current element
     */
    public function current()
    {
      return current($this->SearchOrderStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SearchOrderStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SearchOrderStatus);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->SearchOrderStatus);
    }

    /**
     * Countable implementation
     *
     * @return SearchOrderStatus Return count of elements
     */
    public function count()
    {
      return count($this->SearchOrderStatus);
    }

}
