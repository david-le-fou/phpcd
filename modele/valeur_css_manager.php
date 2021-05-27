<?php
class Valeur_css_manager
{
	private $db;
	private $table = 'valeur_css';
	public function __construct($db){
		$this->setDb($db);
	}
	public function setDb(PDO $db){
		$this->db = $db;
	}
	public function Add(Valeur_css $add){
		$q = $this->db->prepare("INSERT INTO $this->table (`id`, `valeur`, `description`, `id_attribut_css`) VALUES (NULL, :valeur ,:description, :id_attribut_css);");
		$q->bindValue(':valeur', $add->getValeur());
		$q->bindValue(':description',$add->getDescription());
		$q->bindValue(':id_attribut_css',$add->getId_attribut_css());
		if($q->execute()){
			header('refresh:0');
		 }else{
			 echo 'Existe';
		 }
	}
	public function Dell($id){

	}
	public function Sel($id_attribut_css){
		$result = [];
		$q = $this->db->query("SELECT*FROM $this->table WHERE id_attribut_css = $id_attribut_css");
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$result[] = new Valeur_css($donnees);
			}
		return $result;

	}
	public function Up($id){

	}
}
?>