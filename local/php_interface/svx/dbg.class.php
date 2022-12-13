<?php


class DBG
{

	private static $timers = array();

	static function setTimer($name)
	{
		self::$timers[$name] = microtime(1);
		return "TIMER {$name} START";
	}

	static function getTimer($name)
	{
		if( isset(self::$timers[$name]) ){
			return round( (microtime(1) - self::$timers[$name]) , 4);
		}
		else{
			return 'NOT FOUND TIMER "'.$name.'"';
		}
	}

	static function ISDBG($v = null)
	{
		return isset($_GET['dbg']) && $_GET['dbg'] == $v;
	}
	
	
	static function vd(){
		/*if(!self::isTest() ){
			return;
		}*/
		echo '<pre>';
		foreach (func_get_args() as $key => $value) {
			var_dump($value);
		}
		echo '</pre>';
	}
	
	static function pre(){
		/*if(!self::isTest() ){
			return;
		}*/
		echo '<pre>';
		foreach (func_get_args() as $key => $value) {
			self::arRecParse($value);
			print_r($value);
		}
		echo '</pre>';
	}

	private static function b2s(&$b){
		if($b === true)
			$b = '(bool) true';
		elseif($b === false)
			$b = '(bool) false';
	}

	private static function arRecParse(&$a){
		if( is_array($a) ){
			foreach($a as $k => $v){
				self::arRecParse($v);
				
				$a[$k] = $v;
			}
		}
		elseif( is_bool($a) ){
			self::b2s($a);
		}
	}

	static function pred()
	{
		if(self::ISDBG()){
			foreach (func_get_args() as $value) {
				self::pre($value);
			}
		}
	}

	static function mem_usage(){
		return array(
			'mem' => round( memory_get_usage(true) /1048576,3)."Mb",
			'peak' => round( memory_get_peak_usage(true) /1048576,3)."Mb"
		);
	}
}

