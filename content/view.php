<?php
namespace content;

class view
{
	public static function config()
	{
		// define default value for global
		\dash\data::site_title(T_("Dash"));
		\dash\data::site_desc(T_("Free PHP Framework & CMS!"));
		\dash\data::site_slogan(T_("The simple framework for php programmers ;)"));
		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());
		\dash\data::include_css(false);
		\dash\data::bodyclass(null);
	}
}
?>