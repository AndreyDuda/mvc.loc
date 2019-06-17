<?php

namespace framework\application\Entities\models\News;

use framework\components\Connection;

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
		
		/*
		$sqlset = "SET NAMES utf8 SET collation_connection = 'utf8_general_ci'";
		$sql = "SHOW SESSION VARIABLES LIKE 'character_set_connection'";
		$db = (new Connection())->queryBuilder()
			->query($sqlset);
		$db = (new Connection())->queryBuilder()
			->query($sql);
		$res = $db->fetch();
		print_r($res);
		echo "<hr/>";
		$sql = "SHOW SESSION VARIABLES LIKE 'collation_connection'";
		$res = mysql_query($sql);
		print_r(mysql_result($res, 0, 1));
		echo "<hr/>";
		
		die;*/
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