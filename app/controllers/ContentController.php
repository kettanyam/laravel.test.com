<?php

class ContentController extends BaseController{

	


	public function actionCreate(){

		
		$name = Input::get('username');   //= $name = $_POST['username'];
		$message = Input::get('usermessage');   //= $message = $_POST['usermessage'];
		DB::insert('insert into mb2 (username, content) values (?,?)', array($name, $message));
		/*$createmessage = new Mb2;
		$createmessage->username = $name;
		$createmessage->content = $message;
		$createmessage->save();*/
		return Redirect::action('grabnshow@gns');
	}

	public function actionOldmessage($mbid){
		//$name = $username;
		$home_url = action("grabnshow@gns");
		$allcontent = DB::select('select * from mb2 where mbid = ?', array($mbid));
		return View::make('update', array('content' => $allcontent, 'home_url' => $home_url));
	}

	public function actionUpdate($mbid){
		$message = Input::get('newmessage');   //= $message = $_POST['newmessage'];
		DB::update("update mb2 set content = '$message' where mbid = ?", array($mbid));
		return Redirect::action('grabnshow@gns');
	}

	public function actionDelete($mbid){
		//DB::delete("delete * from mb2 where mbid = ?", array($mbid));  <---This sentence can't work! I don't know why!
		DB::table('mb2')->where('mbid', '=', $mbid)->delete();
		return Redirect::action('grabnshow@gns');
	}
}

?>