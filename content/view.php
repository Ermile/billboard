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
		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());
	}
}
?>