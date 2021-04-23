<?php
class Valeur_css
{
	 private $id;
	 private $valeur;
	 private $description;
	 private $id_attribut_css;

 	 public function __construct(array $data){
	 	 $this->hydrate($data);
	 }
	 public function hydrate(array $data){
	 	 foreach($data as $key => $value){ 
	 	 	 $methode = 'set'.ucwords($key); 
	 	 	 if(method_exists($this,$methode)){ 
	 	 	 	 $this->$methode($value); 
	 	 	 }
	 	 }
	 }

 	 public function getId(){
	 	 return $this->id;
	 }

 	 public function setId($id){
	 	 $this->id = $id;
	 }
	 public function getValeur(){
	 	 return $this->valeur;
	 }

 	 public function setValeur($valeur){
	 	 $this->valeur = $valeur;
	 }
	 public function getDescription(){
	 	 return $this->description;
	 }

 	 public function setDescription($description){
	 	 $this->description = $description;
	 }
	 public function getId_attribut_css(){
	 	 return $this->id_attribut_css;
	 }

 	 public function setId_attribut_css($id_attribut_css){
	 	 $this->id_attribut_css = $id_attribut_css;
	 }
}
?>