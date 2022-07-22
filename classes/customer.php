<?php 
	// $filepath = realpath(dirname(__FILE__));
	// include_once($filepath.'/../lib/database.php');
 ?>

<?php 
	/**
	 * 
	 * 
	 */
	class customer
	{
		private $db;
		
		public function __construct()
		{
			$this->db = new Database();
		}

		public function insert_customer($data) {
			$fullname = mysqli_real_escape_string($this->db->link, $data['fullname']);
			$username = mysqli_real_escape_string($this->db->link, $data['username']);
			$password = mysqli_real_escape_string($this->db->link, $data['password']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);

			if($fullname == '' || $username == '' || $password == '' || $email == '' || $phone == '') {
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			} else {
				$check_username = "SELECT * FROM customer WHERE user_name = '$username' LIMIT 1";
				$result_check = $this->db->select($check_username);
				if($result_check) {
					$alert = "<span class='error'>Email has been existed</span>";
					return $alert;
				} else {
					$query = "INSERT INTO customer(full_name, user_name, password, email, phone)
											VALUES('$fullname','$username', '$password', '$email', '$phone')";
					$result = $this->db->insert($query);
					if($result) {
						$alert = "<span class='success'>Sign up successfully</span>";
						return $alert;
					} else {
						$alert = "<span class='error'>Sign up not successfully</span>";
						return $alert;
					}
				}
			}
		}
	}

?>