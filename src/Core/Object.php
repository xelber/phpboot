<?php namespace Phpboot\Core;

class Object
{
	private $data = [];

	public function toString()
	{
		return __CLASS__;
	}

    public function __call($name, $arguments)
    {
	    $operation = substr($name, 0, 3);
	    $field = substr($name, 3);
	    if ( $operation == 'set' ) return $this->setValue($field, empty($arguments[0])? null:$arguments[0]);
	    if ( $operation == 'get' ) return $this->getValue($field);

	    throw new \Exception($name.' : Undefined Method!');
    }

    private function setValue($field, $value)
    {
		$this->data[$field] = $value;
    }

	private function getValue($field)
	{
		if ( !isset( $this->data[$field] ) ) return null;
		return $this->data[$field];
	}
}
