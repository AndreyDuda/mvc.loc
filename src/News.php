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
	protected $id;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $title;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $short_content;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $date;
}