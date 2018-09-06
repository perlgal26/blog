<?php
	class ShareModel extends Model{
		
		public function Index(){
			//echo "<br/>models/share.php";
			//$this->query('SELECT * FROM shares ORDER BY create_date DESC');
			//$rows = $this->resultSet();
			//$userId = $rows['user_id'];
			$this->query('SELECT u.id as user_id,u.name,s.id,s.title,s.body,s.link,s.create_date FROM  users u RIGHT JOIN shares s ON u.id = s.user_id ORDER BY s.create_date DESC;');
			$rows = $this->resultSet();
			//print_r($rows);
			return $rows;

		}//end of index function
		
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
				$this->bind(':user_id',$post['user_id']);
				//var_dump($this);
				//exit();
				$this->execute();
				//verify
				if($this->lastInsertId()){
					//Redirect
					header('Location: '.ROOT_URL.ROOT_SHARE_CONTROLLER);
					
				}
			}
			return;

		}//end of add function
		
		public function delete(){
			//santize Post
			//echo "<br/>models/share.php/delete";
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			//var_dump($post);
			if($post['delete']){
				//echo "delete fun";
				$this->query('DELETE FROM shares WHERE id = :id');
				$this->bind(':id',$post['delId']);
				//var_dump($this);
				$this->execute();
				$row = $this->single();
				header('Location: '.ROOT_URL.ROOT_SHARE_CONTROLLER);
				//$this->query('SELECT u.id as user_id,u.name,s.id,s.title,s.body,s.link,s.create_date FROM  users u RIGHT JOIN shares s ON u.id = s.user_id ORDER BY s.create_date DESC;');
				//$rows = $this->resultSet();
				//print_r($rows);
				//return $rows;

				
			}
		}// end of delete function
		
		public function edit(){
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			//var_dump($post);
			if($post['edit']){
				$this->query('SELECT * FROM shares WHERE id = :id');
				$this->bind(':id',$post['editId']);
				$this->execute();
				$rows = $this->resultSet();
				//print_r($rows);
				return $rows;
			}
			if($post['update']){
				//var_dump($post);
				$this->query('UPDATE shares SET title = :title, body = :body, link =:link,	user_id = :user_id WHERE id = :id');
				$this->bind(':id',$post['editId']);
				$this->bind(':title',$post['title']);
				$this->bind(':body',$post['body']);
				$this->bind(':link',$post['link']);
				$this->bind(':user_id',$post['user_id']);
				$row = $this->single();
				header('Location: '.ROOT_URL.ROOT_SHARE_CONTROLLER);
				
			}
				
		}//end of edit function
		
	
	}//end of class

?>