<?php
class Attribut_css_manager
{
	private $db;
	private $table = 'attribut_css';
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
		 if($q->execute()){
			header('refresh:0');
		 }else{
			 echo 'Existe';
		 }
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

		$attrib_css = [];

			$q = $this->db->query("SELECT * FROM $this->table");

			while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$attrib_css[] = new Attribut_css($donnees);
			}

		return $attrib_css;
	}
	public function Sel_id_val($name){
		$result = null;
		$q = $this->db->query("SELECT * FROM $this->table WHERE `valeur` = '$name'");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
			$result = new Attribut_css($donnees);
		}
		return $result;
	}
}
?>