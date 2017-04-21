<?php

Class IndexAction extends Action{
	public function index(){
		$news=M('news')->select();
		$this->assign('news',$news)->display();
	}

	public function handle(){
		if(!IS_AJAX) halt("页面不存在");


		$data=array(
			'title' =>I('title'),
			'content'=>I('content'),
			'pic_path'=>"/design/Public/images/img4.jpg",
			'time'=>date('y-m-d H:i',time())
			);


		if($id=M('news')->data($data)->add()){

			$data['id']=$id;
			$data['status']=1;
			$this->ajaxReturn($data,'json');
		}else{
			$this->ajaxReturn(array('status'=>0),'json');
		}
	 }


	 public function up(){
	 	 import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  '__ROOT__';// 设置附件上传目录
		 if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		return false;exit;
		 }else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
		return $info[0];
		 }
	 }
}
?>