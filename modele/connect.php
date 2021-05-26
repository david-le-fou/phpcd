<?php
class Connect
{
	 private $db;

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

 	 public function getDb(){
	 	 return $this->db;
	 }

 	 public function setDb($db){
	 	 $this->db = $db;
	 }
}
?>