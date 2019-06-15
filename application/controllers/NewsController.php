<?php

include_once URL_APP . 'Entities/models/News/News.php';

class NewsController
{
	public function actionIndex()
	{
		$news = array();
		$news = News::getNewsList();
		var_dump($news);
		
		echo 'actionShow';
		return true;
	}
	
	public function actionShow($id)
	{
		$news = News::getNewsItemById();
		var_dump($news);
		echo 'actionShow';
		return true;
	}
}