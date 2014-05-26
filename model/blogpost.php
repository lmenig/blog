<?php

class blogpost	{
	private $_id;
	private $_tagarray;
	public $_rowarr;
	private $_comment;
	
	function __construct($id)
	{
		if ($id == 0)
			return 0;
		$this->_id = $id;
		$req = $GLOBALS['pdo']->prepare('SELECT * from article WHERE id = :id LIMIT 1');
		$req->execute(array(':id' => $id));	
		$this->_rowarr = $req->fetch();
	}
	public function fetch_comment()
	{
		$req = $GLOBALS['pdo']->prepare('SELECT comment.* from article JOIN comment on article_id = id WHERE id = :id');
		$req->execute(array(':id' => $this->_id));
		return $this->_comment = $req->fetchAll();
	}
}