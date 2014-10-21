<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_bootsrap'))
{
	/*
	| Carrega o bootstrap.
	*/
	function load_bootsrap()
	{

		 $link = array(
		          'href' => 'bootstrap/css/bootstrap.min.css',
		          'rel' => 'stylesheet',
		          'type' => 'text/css'
		);

		return link_tag($link)."\n";

	}
}

if ( ! function_exists('container'))
{
	/*
	| Abre um container
	*/
	function container($class = '', $id = '', $fluid = false)
	{
		$str = '';
		if($fluid)
		{
			$str = "container-fluid";
		} else {
			$str = "container";
		}

		return "<div class=\"".$str." ".$class."\" id=\"".$id."\">\n";

	}
}

if ( ! function_exists('row'))
{
	/*
	| Abre uma linha - row
	*/
	function row($class = '', $id = '')
	{
		return "<div class=\"row ".$class."\" id=\"".$id."\">\n";
	}
}

if ( ! function_exists('col'))
{
	/*
	| Abre uma coluna - col-md-12
	*/
	function col($num = '12', $size = 'md', $class = '', $id = '')
	{
		return "<div class=\"col-".$size."-".$num." ".$class."\" id=\"".$id."\">\n";
	}
}

if ( ! function_exists('close_div'))
{
	/*
	| Fecha uma ou mais divs
	*/
	function close_div($num = 1)
	{
		return str_repeat("</div>\n", $num);
	}
}

if ( ! function_exists('smalltext'))
{
	/*
	| Gera um texto <small>
	*/
	function smalltext($text)
	{
		$str = "";
		$str = "<small>".$text."</small>\n";
		return $str;
	}
}
//<button type="button" class="btn btn-default">Default</button>

if ( ! function_exists('button'))
{
	/*
	| Gera um texto <small>
	*/
	function button($caption, $attributes = array())
	{
		$str = "";
		$str = "<button "._attributes($attributes).">".$caption."</button>\n";
		return $str;
	}
}

if ( ! function_exists('_attributes'))
{

	/*
	| Passa os atributos passados em forma de array.
	*/
	function _attributes($array)
	{
		if(is_array($array))
		{
			$atr = '';
			foreach($array as $key => $value)
			{
				$atr .= $key . "=\"".$value."\" ";
			}
			return $atr;
		}
	}
}