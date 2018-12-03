<?php
namespace content;

class view
{
	public static function config()
	{
		// define default value for global
		\dash\data::site_title(T_("Ermile"));
		\dash\data::site_desc(T_("Software Solution Designer."));
		\dash\data::site_slogan(T_("As easy as ABC is our slogan!"));
		\dash\data::page_title(T_('Ermile Online Billboard'));
		\dash\data::page_special(true);
		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());

		// get host name
		$myHost = '';
		if(function_exists("gethostname"))
		{
			$myHost = gethostname();
		}
		\dash\data::myHost($myHost);

		// get server ip
		$myIP   = '';
		if(isset($_SERVER['SERVER_ADDR']))
		{
			$myIP .= ' '. $_SERVER['SERVER_ADDR'];
		}
		\dash\data::myIP($myIP);

		\dash\data::include_css(false);
		\dash\data::include_js(false);
	}
}
?>