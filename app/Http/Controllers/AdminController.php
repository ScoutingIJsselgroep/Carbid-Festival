<?php namespace App\Http\Controllers;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index() {
		return view('admin.index');
	}
	
	
	public function album($name = false) {
		if($name == false || realpath(public_path() . '/album/' . $name) != public_path() . '/album/' . $name || !is_dir(public_path() . '/album/' . $name)) {
			return scandir(public_path() . '/album');
		}
		
		@mkdir(public_path() . '/album/' . $name . '/full');
		@mkdir(public_path() . '/album/' . $name . '/thumb');
		
		$width = 280;
		$height = 200;
		$res_p = $width/$height;
		
		$i = 0;
		$imgs = glob(public_path() . '/album/' . $name . '/*');
		natsort($imgs);
		
		foreach($imgs as $entry) {
			$entry = basename($entry);
			if(is_file(public_path() . '/album/' . $name . '/' . $entry)) {
				$img_info = getimagesize(public_path() . '/album/' . $name . '/' . $entry);
				if($img_info) {
					echo ++$i . image_type_to_extension($img_info[2]) . PHP_EOL;
					
					$format = substr(image_type_to_extension($img_info[2]), 1);
					$icfunc = "imagecreatefrom" . $format;
					$iresfunc = "image" . $format;
					
					if(!function_exists($icfunc) || !function_exists($iresfunc)) continue;
					
					copy(public_path() . '/album/' . $name . '/' . $entry, public_path() . '/album/' . $name . '/full/' . $i . image_type_to_extension($img_info[2]));
					
					$ini_p = $img_info[0]/$img_info[1];
					$dst_x = $dst_y = 0;
					$src_x = $src_y = 0;
					
					$dst_w  = $width;
					$dst_h = $height;
					if ( $ini_p > $res_p ) {
						$src_h = $img_info[1];
						$src_w = $img_info[1]*$res_p;
						$src_x = ($img_info[0] >= $src_w) ? floor(($img_info[0] - $src_w) / 2) : $src_w;
					} else {
						$src_w = $img_info[0];
						$src_h = $img_info[0]/$res_p;
						$src_y	= ($img_info[1] >= $src_h) ? floor(($img_info[1] - $src_h) / 2) : $src_h;
					}
					
					$isrc = $icfunc(public_path() . '/album/' . $name . '/' . $entry);
					$idest = imagecreatetruecolor($width, $height);
					if ($format == 'png' || $format == 'gif') {
						imagealphablending($idest, false);
						imagesavealpha($idest,true);
						imagefill($idest, 0, 0, IMG_COLOR_TRANSPARENT);
						imagealphablending($isrc, true);
						$quality = 0;
					} else {
						imagefill($idest, 0, 0, 0xFFFFFF);
						$quality = 100;
					}
					imagecopyresampled($idest, $isrc, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
					$res = $iresfunc($idest, public_path() . '/album/' . $name . '/thumb/' . $i . image_type_to_extension($img_info[2]), $quality);
				
					imagedestroy($isrc);
					imagedestroy($idest);
				}
			}
		}
		
		return 'Done';
	}

}
