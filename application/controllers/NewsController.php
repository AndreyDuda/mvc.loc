<?php

include_once URL_APP . 'Entities/models/News/News.php';

class NewsController
{
	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsList();
		
		/*var_dump($newsList);*/
		require_once ROOT . '/public/views/news/index.php';
		return true;
	}
	
	public function actionShow($id)
	{
		$news = News::getNewsItemById($id);
		var_dump($news);
		echo 'actionShow';
		return true;
	}
}