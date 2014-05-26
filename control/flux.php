<?php
Class flux {

	public $_fluxarr;
	
	public function __construct($id)
	{
		$req = $GLOBALS['pdo']->prepare('SELECT * from article ORDER BY id DESC LIMIT 5');
		$req->execute(array(':id' => $id));	
		$this->_fluxarr = $req->fetchAll();
	}
}