<?php
session_start();
class user {
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "oops_login";
    public $run;

    public function __construct() {
        $this->run = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->run->connect_error) {
            die("Database Connection failed: " . $this->run->connect_error);
        }
    }

    public function insert($data) {
        return $this->run->query($data);
    }

    public function login($data) {
        $result = $this->run->query($data);
        return $result && $result->num_rows > 0;
    }
    public function profile($profile)
	{
	 $ft = $this->run->query($profile);//mysql_fetch_array
	 $value=$ft->fetch_object();
	 //echo "<pre>";
	 //print_r($value);
	 $this->val[]=$value;
	 return $this->val;
	}
	public function loggedin()
	{
		if(isset($_SESSION['email']))
		{
			return true;
		}
	}
	public function logout()
	{
		unset($_SESSION['email']);
		return true;
		//header("location:index.php");
	}
    public function url($url) {
        header("Location: $url");
        exit;
    }
}

$obj = new user;
?>

