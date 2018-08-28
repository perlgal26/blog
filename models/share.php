<?php
	class ShareModel extends Model{
		
		public function Index(){
			//echo "<br/>models/share.php";
			//$this->query('SELECT * FROM shares ORDER BY create_date DESC');
			//$rows = $this->resultSet();
			//$userId = $rows['user_id'];
			$this->query('SELECT u.name,s.id,s.title,s.body,s.link,s.create_date FROM  users u INNER JOIN shares s ON u.id = s.user_id');
			$rows = $this->resultSet();
			//print_r($rows);
			return $rows;

		}
		
		public function add(){
			//santize Post
			//echo "<br/>models/share.php/add";
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			if($post['submit']){
				//echo "SUBMITTED";
				//var_dump($post);
				$this->query("INSERT INTO shares (title,body,link,user_id) VALUES(:title, :body, :link, :user_id)");
				$this->bind(':title',$post['title']);
				$this->bind(':body',$post['body']);
				$this->bind(':link',$post['link']);
				$this->bind(':user_id',3);
				//var_dump($this);
				//exit();
				$this->execute();
				//verify
				if($this->lastInsertId()){
					//Redirect
					//header('Location: '.ROOT_URL.ROOT_SHARE_CONTROLLER);
					
				}
			}
			return;

		}
		
		
	}

?>