<?php
require_once 'Joueur.php';
require_once 'Dao.php';
class Tournoi {

	// attribut
	//private $pilote1;
	private DAO $dao;
	private array $lesTournois = array();

	// constructeur
	public function __construct() { 
		$this->dao = new DAO();
		$this->init();

	}
	public function init() {
		$this->lesPilotes = $this->dao->getLesPilotes();
		
	}

	// getter
	//accès direct à un pilote à partir de son indice
	
	public funtion setUnTournoi($unTournoi){
		$this->dao->insertTournoi($unTournoi);
	}
}

?>