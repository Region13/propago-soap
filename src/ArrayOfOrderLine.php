<?php

namespace PropagoSoap;

class ArrayOfOrderLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderLine[] $OrderLine
     */
    protected $OrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderLine[]
     */
    public function getOrderLine()
    {
      return $this->OrderLine;
    }

    /**
     * @param OrderLine[] $OrderLine
     * @return \PropagoSoap\ArrayOfOrderLine
     */
    public function setOrderLine(array $OrderLine = null)
    {
      $this->OrderLine = $OrderLine;
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
      return isset($this->OrderLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderLine
     */
    public function offsetGet($offset)
    {
      return $this->OrderLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderLine[] = $value;
      } else {
        $this->OrderLine[$offset] = $value;
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
      unset($this->OrderLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderLine Return the current element
     */
    public function current()
    {
      return current($this->OrderLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderLine);
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
      reset($this->OrderLine);
    }

    /**
     * Countable implementation
     *
     * @return OrderLine Return count of elements
     */
    public function count()
    {
      return count($this->OrderLine);
    }

}
