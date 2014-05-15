<?php
namespace Twat\MagBundle\Entity;

class MyObject
{
	private $value;

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}
}