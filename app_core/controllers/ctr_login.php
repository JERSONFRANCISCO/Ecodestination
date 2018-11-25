<?php
	require_once(__MDL_PATH . "mdl_login.php");
	class ctr_Login{
		
		private $login_exec;

		public function __construct(){


			$this->login_exec=new mdl_Login();
		
		}

		function btn_login_click(){
			echo "<script>alert('cr')</script>";
			$username=trim($_POST['txt_user']);
			$password=trim($_POST['txt_pssw']);

			$this->login_exec->login($username,$password);

			if ($this->login_exec->conn_status) {

				$_SESSION['MYAPP']="YES";
				$_SESSION['USERID']=$this->login_exec->get_userid();
				$_SESSION['USERNAME']=$this->login_exec->get_username();
				//$_SESSION['USERPHOTO']=$this->login_exec->get_userphoto();

				//header("Location:");
				echo "<script>$('#login').css('display','none');location.href='';</script>";
			}else{
				$_SESSION['MYAPP']="NO";
				echo "<script>alert('INGRESO INCORRECTAMENTE')</script>";
				//$this->MSSG->show_message("","warning","fail_auth");
			}
		}

		function btn_logout_click(){
			if (isset($_POST['btn_logout'])) {
				$this->login_exec->logout();
				//header("Location:");
				
				echo "<script>location.href='';</script>";
			}
		}
	}
	?>