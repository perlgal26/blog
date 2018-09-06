<?php
	class UserModel extends Model{
		
		public function register(){
			//santize Post
				//echo "<br/>models/share.php/add";
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			$password = md5($post['password']);
			if($post['submit']){
				//echo "SUBMITTED";
					//var_dump($post);
				$this->query("INSERT INTO users (name,email,password) VALUES(:name, :email, :password)");
				$this->bind(':name',$post['name']);
				$this->bind(':email',$post['email']);
				$this->bind(':password',$password);
					
				//var_dump($this);
				//exit();
				$this->execute();
				//verify
				if($this->lastInsertId()){
					//Redirect
					header('Location: '.ROOT_URL.ROOT_USERL_CONTROLLER);
					//echo "Registered";
				}
			}
				return;

		}
		
		public function login(){
			
			//compare login
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			
			$password = md5($post['password']);
			if($post['submit']){
				//echo "SUBMITTED";
				//var_dump($post);
				$this->query("SELECT * FROM USERS WHERE email = :email AND password = :password");
				//var_dump($this);
				$this->bind(':email',$post['email']);
				$this->bind(':password',$password);
			
				$row = $this->single();
				if ($row){
					//echo "Logged In";
					$_SESSION['is_logged_in'] = true;
					$_SESSION['user_data'] = array(
						"id" => $row['id'],
						"name" => $row['name'],
						"email"=> $row['email'],
					);
					//var_dump($_SESSION);
					//Redirect
					//echo ROOT_URL;	
					header('Location: '.ROOT_URL.ROOT_SHARE_CONTROLLER);
				
				}
				else{
					//echo "Incorrect login";
					Message::setMsg('Incorrect Login', 'error');
				}
				
			}
			return;
		}	
	}

	?>