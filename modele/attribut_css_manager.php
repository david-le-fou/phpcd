<?php
class Attribut_css_manager
{
	private $db;
	public function __construct($db){
		$this->setDb($db);
	}
	public function setDb(PDO $db){
		$this->db = $db;
	}
 	public function Add(Attribut_css $add){
		 $q = $this->db->prepare("INSERT INTO `attribut_css` (`id`, `valeur`, `description`) VALUES (NULL, :valeur ,:description);");
		 $q->bindValue(':valeur', $add->getValeur());
		 $q->bindValue(':description',$add->getDescription());
		 $q->execute();
	}
 	 public function Del($del){
	 	$this->del = $del;
	}
 	 public function Up($up){
	 	$this->up = $up;
	}
 	public function Sel(){
		//  $data = array();
	 	// $q =$this->db->prepare("SELECT * FROM `attribut_css` where id=$id");
		// $q->execute();
		// foreach($q->fetchAll() as $k=>$v):
		// 	$data[$k]=$v;
		// endforeach;
		// $attrib_css = new Attribut_css($data);	

		$persos = [];

			$q = $this->db->query("SELECT * FROM `attribut_css`");

			while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
			$persos[] = new Attribut_css($donnees);
			}

		return $persos;
	}
}
?>