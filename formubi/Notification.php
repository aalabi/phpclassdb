<?php
	/**
	 * 
	 */
	class Notification{
		
		public $_name;
		public $_email;
		public $_phone;
		public $_error;
		
		private function validEmail($email){
			$valid = false;
			if($email) $valid = true;
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) $email = true;
			return $valid;
		}
		
		public function __construct($name, $email, $phone) {
			$error = [];
			if($name){
				$this->_name = $name;	
			}
			else {
				$error['name'] = "Invalid name";
			}
			if($this->validEmail($email)){
				$this->_email = $email;	
			}
			else {
				$error['email'] = "Invalid email";
			}
			if($phone){
				$this->_phone = $phone;	
			}
			else {
				$error['phone'] = "Invalid phone";
			}
			$this->_error = $error;
		}
		
		public function displayContent(){
			$error = $this->_error;
			if(!isset($error['name']))
			return "{$this->_name} your registration is successful";
		}
		
		public function mailer(){
			$error = $this->_error;
			if(!isset($error['email'])){
				//mail($this->_email, "Reg Status", "Reg message");
			}
		}
		
		public function sendSMS(){
			
		}
	}
	