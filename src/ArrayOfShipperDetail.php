<?php

namespace PropagoSoap;

class ArrayOfShipperDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShipperDetail[] $ShipperDetail
     */
    protected $ShipperDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipperDetail[]
     */
    public function getShipperDetail()
    {
      return $this->ShipperDetail;
    }

    /**
     * @param ShipperDetail[] $ShipperDetail
     * @return \PropagoSoap\ArrayOfShipperDetail
     */
    public function setShipperDetail(array $ShipperDetail = null)
    {
      $this->ShipperDetail = $ShipperDetail;
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
      return isset($this->ShipperDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShipperDetail
     */
    public function offsetGet($offset)
    {
      return $this->ShipperDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShipperDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ShipperDetail[] = $value;
      } else {
        $this->ShipperDetail[$offset] = $value;
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
      unset($this->ShipperDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShipperDetail Return the current element
     */
    public function current()
    {
      return current($this->ShipperDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShipperDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShipperDetail);
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
      reset($this->ShipperDetail);
    }

    /**
     * Countable implementation
     *
     * @return ShipperDetail Return count of elements
     */
    public function count()
    {
      return count($this->ShipperDetail);
    }

}
