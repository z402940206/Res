<?php
class SingleAction extends Action{
	public function index(){

		$selectC=M('news')->where('id=%d',I('tid'))->find();
		$news=M('news')->select();
		$npost=M('post')->select();
		$newMessage=M('message')->order('time desc')->limit(1,3)->select();
		$message=M('message');
		$messageCount=$message->count();

		import('ORG.Util.Page');
		$per_page=2;
		$page=new page($messageCount,$per_page);
		$page_show=$page->show();
		$limit=$page->firstRow.','.$page->listRows;
		$list=$message->order('id')->limit($limit)->select();
		$this->assign('list',$list);
		$this->assign('page',$page_show);
		$this->assign('message',$newMessage);
		$this->assign('selectC',$selectC);
		$this->assign('news',$news);
		$this->assign('npost',$npost);
		$this->display();
	}

	public function handle(){
		$tid=I('tid');
		$content=I('LYcontent');
		$time=date('y-m-d H:i',time());
		$data=array(
			'content'=>$content,
			'time'=>$time
			);

		if($id=M('message')->data($data)->add()){
			$this->redirect('index',array('tid'=>$tid));	
		}else{
			$this->error('留言失败');
		}


	}
}
?>