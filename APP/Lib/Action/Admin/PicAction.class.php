<?php

Class PicAction extends CommonAction{

	public function index(){
	$this->display();
	}

	public  function noticelist()
   {
       $m = M("picinfo");
       $pagenum = isset($_POST['page']) ? intval($_POST['page']) : 1;
       $rowsnum = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
       $title = trim($_POST['title']);
       $content = trim($_POST['content']);
       if ($title != "" && $title != null){
           $where['title'] = array('like','%'.$title.'%');
       }
       if ($content != "" && $content != null){
           $where['content'] = array('like','%'.$content.'%');
       }
       $total = $m->where($where)->count();
       if ($total == 0){
           $arr = array("id"=>'',"title"=>'',"content"=>'',"createtime"=>'');
           $json = '{"total":'.$total.',"rows":'.json_encode($arr).'}';
       }else{
           $arr = $m->where($where)->limit(($pagenum-1)*$rowsnum.','.$rowsnum)->order('id desc')->select();
           foreach ($arr as $key => $value) {
              
               $data[] = $value;
           }
           $json = '{"total":'.$total.',"rows":'.json_encode($data).'}';
       }
       echo $json;
   }
}
?>