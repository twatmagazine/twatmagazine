<?php
namespace Twat\MagBundle\Entity;

class MyObject
{
	private $value;
	private $id;

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
}