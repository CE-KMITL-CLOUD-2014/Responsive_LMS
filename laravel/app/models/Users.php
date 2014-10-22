<?php
	class Users{
		private $id;
		private $username;
		private $password;
		private $title;
		private $name;
		private $surname;
		private $status;
		public function __construct() {
   			$this->id=Users::getMaxId()+1;
			$this->username=NULL;
			$this->password=NULL;
			$this->title=NULL;
			$this->name=NULL;
			$this->surname=NULL;
			$this->status=NULL;
    	}
		public static function getMaxId(){
			$maxid= UsersRepository::orderBy('ID', 'DESC')->first();
			if(!isset($maxid)){
				return "0";
			}
			else{
				return $maxid->ID;
			}
		}
		public static function getFromId($id){
			$dataTmp = UsersRepository::find(1);
			$obj = new Users;
			if(count($dataTmp)==1){
				$obj->id=$dataTmp->ID;
				$obj->username=$dataTmp->username;
				$obj->password=$dataTmp->password;
				$obj->title=$dataTmp->title;
				$obj->name=$dataTmp->name;
				$obj->surname=$dataTmp->surname;
				$obj->status=$dataTmp->status;
				return $obj;
			}
			else{
				return NULL;
			}

		}
		public function getID(){
			return $this->id;
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