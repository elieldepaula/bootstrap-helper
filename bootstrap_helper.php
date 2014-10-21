<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Este helper gera os elementos do bootstrap 3 usando PHP
| ao invés de HTML puro.
|
| Foi desenvolvido para ser usado no FrameWork CodeIgniter em conjunto
| com o helper HTML.
| 
| @author Eliel de Paula <elieldepaula@gmail.com>
| @since 20/10/2014
|--------------------------------------------------------------------------
*/

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

if ( ! function_exists('button'))
{
	/*
	| Gera um botão
	*/
	function button($caption, $attributes = array())
	{
		$str = "";
		$str = "<button "._attributes($attributes).">".$caption."</button>\n";
		return $str;
	}
}

if ( ! function_exists('context_color'))
{
	/*
	| Gera um parágrafo com as cores padrões do bootstrap.
	*/
	function context_color($text, $tag = 'p', $style = 'primary')
	{
		$str = "";
		$str = "<".$tag." class=\"text-".$style."\">".$text."</".$tag.">\n";
		return $str;
	}
}

if ( ! function_exists('context_bg'))
{
	/*
	| Gera um parágrafo com as cores de fundo padrões do bootstrap.
	*/
	function context_bg($text, $tag = 'p', $style = 'primary')
	{
		$str = "";
		$str = "<".$tag." class=\"bg-".$style."\">".$text."</".$tag.">\n";
		return $str;
	}
}

if ( ! function_exists('clearfix'))
{

	/*
	| Clearfix.
	*/
	function clearfix()
	{
		return "<div class=\"clearfix\"></div>\n";
	}
}

if ( ! function_exists('glyphicon'))
{

	/*
	| Gera um ícone.
	*/
	function glyphicon($icon = 'star')
	{
		return "<span class=\"glyphicon glyphicon-".$icon."\"></span>\n";
	}
}

if ( ! function_exists('breadcrumb'))
{
	/*
	| Gera um navegador estilo breadcrumb.
	| Os itens devem ser um array:
	|
	| array(
	|    array('link'=>'seu/link', 'caption'=>'Seu texto'),
	|    array('link'=>'seu/link', 'caption'=>'Seu texto'),
	|    array('caption'=>'Seu texto')
	| )
	|
	*/
	function breadcrumb($itens)
	{
		$str = "";
		$str .= "<ol class=\"breadcrumb\">\n";

		foreach($itens as $key => $item)
		{
			if($item['url']){
				$str .= "<li>".anchor($item['url'], $item['caption'])."</li>\n";
			} else {
				$str .= "<li class=\"active\">".$item['caption']."</li>\n";
			}
		}

		$str .= "</ol>\n";

		return $str;

		// return print_r($itens);
	}
}