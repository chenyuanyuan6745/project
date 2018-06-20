<?php 
namespace Controller;
class Controller
{
	public $assign;

	public function display($action)
	{
		@extract($this->assign);
		include 'View/'.$action.'.php';
	}
	public function assign($key,$value)
	{
		$this->assign[$key] = $value;
	}
} 