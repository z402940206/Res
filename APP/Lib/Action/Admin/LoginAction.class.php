<?php

Class LoginAction extends Action{
	public function index(){
		$this->display();
	}

	public function login(){
		if (!IS_POST) halt("页面错误");

		if(I('code','','md5')!=session('verify')){
			$this->error('验证码错误');
		}

		$username=I('username');
		$user=M('user')->where('username'==$username)->find();

		if(!$user||$user[password]!=I('password')){
		 	$this->error('密码错误');
		}

		if($user['lock']) $this->error("用户被冻结");

		$data=array(
			'id'=>$user['id'],
			'logintime'=> time(),
			'loginip'=> get_client_ip(),
			);

		M('user')->save($data);

		session('uid',$user['id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		session('loginip',$user['loginip']);

		$this->redirect('Admin/Easy/index');
	}

	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(1,1,'png');
	}
}
?>