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
		/*$mb2content = DB::table('mb2')
								->orderBy('mbid','desc')
								->get();*/
		//$mb2content = Mb2::all();

		$mb2content = Mb2::orderBy('mbid', 'DESC')->get();

		$newscontent = News::all();

		/*$mb2content = Mb2::with(array('*' => function($query)
		{
			$query->orderBy('mbid', 'desc');
		}))->get();*/
		return View::make('show',array('content' => $mb2content, 'news' => $newscontent, 'home_url' => $this->home_url));
	}
}