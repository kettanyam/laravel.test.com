<?php

class News2 extends Eloquent {

	protected $table = 'news2';

	//public $timestamps = false;

	protected $primaryKey = 'newsid';

	protected $fillable = array('newsid', 'newscontent', 'updated_at', 'created_at');
}


?>