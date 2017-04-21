<?php
class GalleryAction extends Action{
	public function index(){
		$date=M('picinfo')->select();
		$this->assign('date',$date)->display();
	}

}
?>