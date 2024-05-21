<?php

	require_once 'assets/php/autoload.php';

	$urlE	=	explode('/', $_GET['url']);
	$pages	=	[null, 'home', 'profile', 'store'];

	if(isset($urlE[0]) && in_array($urlE[0], $pages)){
		if($urlE[0] == $pages[0]){
			include 'pages/list.php';
		}else if($urlE[0] == $pages[1]){
			include 'pages/home.php';
		}else if($urlE[0] == $pages[2]){
			include 'pages/profile.php';
		}else if($urlE[0] == $pages[3]){
			include 'pages/store.php';
		}
	}else if($urlE[0] == 'css' || $urlE[0] == 'js'){
		if($urlE[0] == 'css'){
			if($urlE[1] == 'profile'){
				$yuki->css([$urlE[1] . '.css']);
			}else if($urlE[1] == 'store'){
				$yuki->css([$urlE[1] . '.css']);
			}
			$yuki->css_plugins();
		}else if($urlE[0] == 'js'){
			$yuki->js_plugins();
			if($urlE[1] == 'profile'){
				$yuki->js([$urlE[1] . '.js', 'player.js', 'feed.js']);
			}else if($urlE[1] == 'store'){
				$yuki->js([$urlE[1] . '.js']);
			}
		}
	}
