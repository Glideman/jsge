<?php

class View {



	function generate($content_view, $template_view, $data = null) {
		if($template_view) include 'views/'.$template_view;
		else include 'views/'.$content_view;
	}


}