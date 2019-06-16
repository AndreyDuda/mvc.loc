<?php

include_once ROOT . '/components/Connection.php';

class News
{
	public static function getNewsItemById($id)
	{
		$id = intval($id);
		
		$db = (new Connection())->queryBuilder()
			->query(
			'SELECT `id`, `title`, `date`, `short_content`
					  FROM `news`
					  WHERE `id`=' . $id);
		$db->setFetchMode(PDO::FETCH_ASSOC);
		$newsItem = $db->fetch();
		
		return $newsItem;
	}
	
	public static function getNewsList()
	{
		
		
		$db = (new Connection())->queryBuilder()
			->query(
			'SELECT `id`, `title`, `date`, `short_content`
					  FROM `news`');
		$i = 0;
		$newsList = [];
		while($row = $db->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}
		
		return $newsList;
	}
}