<?php

class NewsController extends BaseController{

	public $home_url = null;

	public function __construct(){
		$this->home_url = action("grabnshow@gns");
	}

	public function actionOldnews(){
		//$newscontent = DB::table('news')->get();
		$news = News2::first();
		return View::make('updatenews', array('newscontent' => $news, 'home_url' => $this->home_url));
	}

	public function actionUpdate($newsid){
		$newcontent = $_POST['thenews'];
		//DB::table('news')->where('newsid',$newsid)->update(array($newcontent));
		//DB::update("update news set newscontent = '$newcontent' where newsid = ?", array($newsid));
		$waitforedit = News2::find($newsid);
		$waitforedit->newscontent = $newcontent;
		$waitforedit->save();
		return Redirect::action('grabnshow@gns');  //Connect to  another controller.
	}
}