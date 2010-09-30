<?php defined('SYSPATH') or die('No direct script access.');

class ImplodeUppercase {
	static function decode( $str )
	{
		return strtolower( implode("_", preg_split('/(?=[A-Z])/', $str, -1, PREG_SPLIT_NO_EMPTY) ) );
	}
	static function ucwords( $str )
	{
		return ucwords(strtolower( ImplodeUppercase::decode($str) ));
	}
	static function ucwords_text( $str )
	{
		return str_replace("_", " ", ucwords(strtolower( ImplodeUppercase::decode($str) )));
	}
}