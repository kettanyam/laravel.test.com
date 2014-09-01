<?php


class grabnshow extends BaseController{

	public $home_url = null;

	public function __construct(){
		$this->home_url = action("grabnshow@gns");
	}

	/*
 	*Grab content from database
 	*
 	*/
	public function gns(){

		//$mb2content = Mb2::all();
		$mb4content = Mb4::orderBy('mbid', 'DESC')->get();
		$newscontent = News2::all();

		return View::make('show',array('content' => $mb4content, 'news' => $newscontent, 'home_url' => $this->home_url));
	}
}