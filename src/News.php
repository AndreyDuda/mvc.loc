<?php

use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity
 *  @ORM\Table(name="news")
 */
class News
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue()
	 */
	public $id;
	
	/**
	 * @ORM\Column(type="string")
	 */
	public $title;
	
	/**
	 * @ORM\Column(type="string")
	 */
	public $short_content;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	public $date;
}