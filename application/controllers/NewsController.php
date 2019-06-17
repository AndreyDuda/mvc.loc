<?php

namespace framework\application\controllers;

use framework\application\Entities\models\News\News;

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