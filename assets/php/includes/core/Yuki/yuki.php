<?php

	require_once 'vendor/autoload.php';

	use MatthiasMullie\Minify;

	class Yuki{

		public $version 	= 	'2.0.18 NXG';

		public $path		=	[
			'css'			=>	'',
			'js'			=>	'',
		];

		// Check if file exist
		private function check_file(string $file, string $type_file){

		}

		private function gzip(string $type_file){
			// Enable gzip encoding.
			ob_start('ob_gzhandler');
			// Enable caching
			header('Cache-Control: public');
			// Expire in one day
			header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
			// Set type file
			if($type_file == 'css'){
				// Set the correct MIME type, because Apache won't set it for us
				header('Content-type: text/css');
			}else if($type_file == 'js'){
				// Set the correct MIME type, because Apache won't set it for us
				header('Content-type: text/javascript');
			}
		}

		public function js_plugins(){
			// List all file's on path of plugin's
			foreach(scandir($this->path['js'] . '/plugins/') as $file){
				// Load the GZip function's
				$this->gzip('js');
				// Remove the point
				if($file != '.'){
					// Remove the double point's
					if($file != '..'){
						// Load the plugin's minify
						echo file_get_contents($this->path['js'] . '/plugins/' . $file);
					}
				}
			}
		} 

		public function css_plugins(){
			// List all files on path of plugin's
			foreach(scandir($this->path['css'] . '/plugins/') as $file){
				// Remove the point
				if($file != '.'){
					// Remove the double point's
					if($file != '..'){
						// Ignore the .css.map file's
						if(end(explode('.', $file)) != 'map'){
							// List only .css file's
							if(@end(explode('.', $file)) == 'css'){
								// Minify the file
								$this->css(['/plugins/' . $file]);
							}
						}
					}
				}
			}
		}

		public function js(array $jsFiles){
			// Check if $this->path['js'] is set and exists
			if(is_dir($this->path['js'])){
				// Set instance the class matthiasmullie/minify
				$minEngine		=		new Minify\JS;
				// List all items array $jsFiles
				foreach($jsFiles as $jsCode){
					// Add js files
					$minEngine->add($this->path['js'] . $jsCode);
				}
				// Load gzip functions
				$this->gzip('js');
				// Show content minified
				echo $minEngine->minify();
			}
		}

		public function css(array $cssFiles){
			// Check if $this->path['css'] is set and exists
			if(is_dir($this->path['css'])){
				// Set instance the class matthiasmullie/minify
				$minEngine		=		new Minify\CSS;
				// List all items array $jsFiles
				foreach($cssFiles as $cssCode){
					// Add js files
					$minEngine->add($this->path['css'] . $cssCode);
				}
				// Load gzip functions
				$this->gzip('css');
				// Show content minified
				echo $minEngine->minify();
			}
		}

	}
