<?php
class ContactAction extends Action{
	public function index(){		
		$this->display();
	}

	public function handle(){
		$username=I('username');
		$content=I('userMsg');
		if(!empty($username) && !empty($content)){
		if(SendMail("qinbaole9394@qq.com",$username,$content))
			$this->success('发送成功');
		else
		echo'发送失败';
		}
		die();
	}
}
?>