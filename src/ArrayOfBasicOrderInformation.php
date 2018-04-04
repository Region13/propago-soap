<?php

namespace PropagoSoap;

class ArrayOfBasicOrderInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BasicOrderInformation[] $BasicOrderInformation
     */
    protected $BasicOrderInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BasicOrderInformation[]
     */
    public function getBasicOrderInformation()
    {
      return $this->BasicOrderInformation;
    }

    /**
     * @param BasicOrderInformation[] $BasicOrderInformation
     * @return \PropagoSoap\ArrayOfBasicOrderInformation
     */
    public function setBasicOrderInformation(array $BasicOrderInformation = null)
    {
      $this->BasicOrderInformation = $BasicOrderInformation;
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
      return isset($this->BasicOrderInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BasicOrderInformation
     */
    public function offsetGet($offset)
    {
      return $this->BasicOrderInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BasicOrderInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BasicOrderInformation[] = $value;
      } else {
        $this->BasicOrderInformation[$offset] = $value;
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
      unset($this->BasicOrderInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BasicOrderInformation Return the current element
     */
    public function current()
    {
      return current($this->BasicOrderInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BasicOrderInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BasicOrderInformation);
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
      reset($this->BasicOrderInformation);
    }

    /**
     * Countable implementation
     *
     * @return BasicOrderInformation Return count of elements
     */
    public function count()
    {
      return count($this->BasicOrderInformation);
    }

}
