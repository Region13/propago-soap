<?php

namespace PropagoSoap;

class ArrayOfSerializationInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SerializationInfo[] $SerializationInfo
     */
    protected $SerializationInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SerializationInfo[]
     */
    public function getSerializationInfo()
    {
      return $this->SerializationInfo;
    }

    /**
     * @param SerializationInfo[] $SerializationInfo
     * @return \PropagoSoap\ArrayOfSerializationInfo
     */
    public function setSerializationInfo(array $SerializationInfo = null)
    {
      $this->SerializationInfo = $SerializationInfo;
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
      return isset($this->SerializationInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SerializationInfo
     */
    public function offsetGet($offset)
    {
      return $this->SerializationInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SerializationInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SerializationInfo[] = $value;
      } else {
        $this->SerializationInfo[$offset] = $value;
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
      unset($this->SerializationInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SerializationInfo Return the current element
     */
    public function current()
    {
      return current($this->SerializationInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SerializationInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SerializationInfo);
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
      reset($this->SerializationInfo);
    }

    /**
     * Countable implementation
     *
     * @return SerializationInfo Return count of elements
     */
    public function count()
    {
      return count($this->SerializationInfo);
    }

}
