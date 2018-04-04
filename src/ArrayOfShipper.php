<?php

namespace PropagoSoap;

class ArrayOfShipper implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Shipper[] $Shipper
     */
    protected $Shipper = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Shipper[]
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param Shipper[] $Shipper
     * @return \PropagoSoap\ArrayOfShipper
     */
    public function setShipper(array $Shipper = null)
    {
      $this->Shipper = $Shipper;
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
      return isset($this->Shipper[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Shipper
     */
    public function offsetGet($offset)
    {
      return $this->Shipper[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Shipper $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Shipper[] = $value;
      } else {
        $this->Shipper[$offset] = $value;
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
      unset($this->Shipper[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Shipper Return the current element
     */
    public function current()
    {
      return current($this->Shipper);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Shipper);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Shipper);
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
      reset($this->Shipper);
    }

    /**
     * Countable implementation
     *
     * @return Shipper Return count of elements
     */
    public function count()
    {
      return count($this->Shipper);
    }

}
