<?php
	class Users{
		private $id;
		private $username;
		private $password;
		private $title;
		private $name;
		private $surname;
		private $status;
		public function getMaxId(){
			return UsersRepository::table('id')->order_by('id', 'desc')->first();
		}
		public function __construct( ) {
			
   			this->$id;
			this->$username;
			this->$password;
			this->$title;
			this->$name;
			this->$surname;
			this->$status;
    	}
		public function getID(){
			return this->ID;
		}
		public function setUser($user){
			this->username = $user;
		}
		public function getUser(){
			return this->username;
		}
		public function setPass($pass){
			this->password = $pass;
		}
		public function getPass(){
			return this->password;
		}
		public function setTitle($title){
			this->title = $title;
		}
		public function getTitle(){
			return this->title;
		}
		public function setName($name){
			this->name = $name;
		}
		public function getName(){
			return this->name;
		}
		public function setSurname($surname){
			this->surname = $surname;
		}
		public function getSurname(){
			return this->surname;
		}
		public function setStatus($status){
			this->status = $status;
		}
		public function getStatus(){
			return this->status;
		}
	}