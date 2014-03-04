<?php namespace Flyer\Components\Routing;

use Flyer\Components\Facade;

class RoutingFacade extends Facade
{
	protected static function getFacadeAccessor() { return 'route' }
}