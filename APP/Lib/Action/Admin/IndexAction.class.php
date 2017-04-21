<?php

Class IndexAction extends CommonAction{

	public function index(){
	$this->display();
	}

	public  function noticelist()
   {
       $m = M("user");
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

   public function add(){     
        $Form   =  M('user');
        $Form->create();       
 
        $result =   $Form->add();
        if($result > 0){
            echo json_encode(array('success'=>true));
        }else {
            echo json_encode(array('errorMsg'=>'操作失败'));
        }
    }
   
 
    
    public function edit(){
        $data['id'] = $_POST['id'];       
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $Form   =  M('user');        
        $result =   $Form->save($data);
        if($result > 0){
            echo json_encode(array('success'=>true));
        }else {
            echo json_encode(array('errorMsg'=>'操作失败'));
        } 
    }
    
    public function delete(){
            $id = $_POST['id'];
        $m = M("user");
        for ($i=0;$i<count($id);$i++){
          $t = $m->delete($id[$i]);
        }
        if($t > 0){
          echo json_encode(array('success'=>true));
        }else {
          echo json_encode(array('errorMsg'=>'操作失败'));
        }
    }
}
?>