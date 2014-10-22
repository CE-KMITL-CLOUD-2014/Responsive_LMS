<?php
	class Users{
		private $id;
		private $username;
		private $password;
		private $title;
		private $name;
		private $surname;
		private $status;
		public static function getMaxId(){
			$maxid= UsersRepository::orderBy('ID', 'DESC')->first()->ID;
			if(!isset($maxid)){
				return "0";
			}
			else{
				return $maxid;
			}
		}
		public static function getFromId($id){
			$dataTmp = UsersRepository::where('ID','=',$id)->get();
			$obj = new Users;
			if(count($dataTmp)!=0){
				$this->$id=$dataTmp->ID;
				$this->$username=$dataTmp->username;
				$this->$password=$dataTmp->password;
				$this->$title=$dataTmp->title;
				$this->$name=$dataTmp->name;
				$this->$surname=$dataTmp->surname;
				$this->$status=$dataTmp->status;
			}
			return $obj;

		}

		public function __construct() {
   			$this->$id=Users::getMaxId()+1;
			$this->$username=NULL;
			$this->$password=NULL;
			$this->$title=NULL;
			$this->$name=NULL;
			$this->$surname=NULL;
			$this->$status=NULL;
    	}
		public function getID(){
			return $this->ID;
		}
		public function setUser($user){
			$this->username = $user;
		}
		public function getUser(){
			return $this->username;
		}
		public function setPass($pass){
			$this->password = $pass;
		}
		public function getPass(){
			return $this->password;
		}
		public function setTitle($title){
			$this->title = $title;
		}
		public function getTitle(){
			return $this->title;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
		public function setSurname($surname){
			$this->surname = $surname;
		}
		public function getSurname(){
			return $this->surname;
		}
		public function setStatus($status){
			$this->status = $status;
		}
		public function getStatus(){
			return $this->status;
		}
	}