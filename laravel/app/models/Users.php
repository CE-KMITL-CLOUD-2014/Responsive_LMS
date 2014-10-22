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
			$dataTmp = UsersRepository::find($id);
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
		public static function getFromUserPass($user,$pass){
			$dataTmp = UsersRepository::where('username','=',$user)->where('password','=',$pass);
			$obj = new Users;
			if(count($dataTmp)==1){
				$obj->id=$dataTmp[0]->ID;
				$obj->username=$dataTmp[0]->username;
				$obj->password=$dataTmp[0]->password;
				$obj->title=$dataTmp[0]->title;
				$obj->name=$dataTmp[0]->name;
				$obj->surname=$dataTmp[0]->surname;
				$obj->status=$dataTmp[0]->status;
				return $obj;
			}
			else{
				return NULL;
			}
		}
		public function insert(){
			$dataTmp = UsersRepository::where('ID','=',$this->id)->orWhere('username','=',$this->username);
			if(count($dataTmp)==0){
				$dataTmp = new UsersRepository;
				$dataTmp->ID = $this->id;
				$dataTmp->username = $this->username;
				$dataTmp->password = $this->password;
				$dataTmp->title = $this->title;
				$dataTmp->name = $this->name;
				$dataTmp->surname = $this->surname;
				$dataTmp->status = $this->status;
				$dataTmp->save();
				return true;
			}
			else{
				return false;
			}
		}
		public function update(){
			$dataTmp = UsersRepository::find($this->id);
			if($dataTmp!=NULL){
				$dataTmp->ID = $this->id;
				$dataTmp->username = $this->username;
				$dataTmp->password = $this->password;
				$dataTmp->title = $this->title;
				$dataTmp->name = $this->name;
				$dataTmp->surname = $this->surname;
				$dataTmp->status = $this->status;
				$dataTmp->save();
				return $dataTmp;
			}
			else{
				return false;
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