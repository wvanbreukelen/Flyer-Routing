<?php namespace Flyer\Components\Routing;

class Route
{
	protected $url;

	protected $methods;

	protected $action;

	public function __construct($methods, $uri, $action)
	{
		$this->methods = $methods;
		$this->uri = $uri;
		$this->action = $action;
	}

	public function getMethods()
	{
		return $this->methods;
	}

	public function getUri()
	{
		return $this->url;
	}

	public function getAction()
	{
		return $this->action;
	}
}