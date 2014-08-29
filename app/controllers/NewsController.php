<?php

class NewsController extends BaseController{

	public $home_url = null;

	public function __construct(){
		$this->home_url = action("grabnshow@gns");
	}

	public function actionOldnews(){
		$newscontent = DB::table('news')->get();
		return View::make('updatenews', array('newscontent' => $newscontent, 'home_url' => $this->home_url));
	}

	public function actionUpdate($newsid){
		$newcontent = $_POST['thenews'];
		//DB::table('news')->where('newsid',$newsid)->update(array($newcontent));
		DB::update("update news set newscontent = '$newcontent' where newsid = ?", array($newsid));
		return Redirect::action('grabnshow@gns');  //Connect to  another controller.
	}
}