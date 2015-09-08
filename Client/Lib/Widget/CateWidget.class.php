<?php
header('Content-Type:text/html;charset=utf-8');
class CateWidget extends Action {
    public function menu(){
      $nav=M("type")->where("levet=0")->field("id,type")->order("sort desc")->select();
      foreach($nav as $key=>$val){
          $where["levet"]=$val["id"];
          $list=M("type")->where($where)->field("id,type")->order("sort desc")->select();
          $nav[$key]["erji"]=$list;
      }
      $this->assign("nav",$nav);
      $this->display("Public:header");
    }
    public function banner(){
        $img=M("img")->where("type=1")->field("id,title,img,src")->order("sort desc")->select();
        $this->assign("img",$img);
        $this->display("Public:banner");
    }
    public function zibanner(){
        $img=M("img")->where("type=3")->field("id,title,img,src")->order("sort desc")->find();
        $this->assign("img",$img);
        $this->display("Public:zibanner");
    }
    public function footer(){
        $nav=M("type")->where("levet=0")->field("id,type")->order("sort desc")->select();
         $i=1;
         $j=1;
        $list=array();
        foreach($nav as $key=>$val){
            $list[$i][$j]=$val;
            if($j%3==0){
                $i++;
            }
            $j++;
        }
        $attr=M("attr")->find();
        $this->assign("attr",$attr);
        $this->assign("nav111",$list);
        $this->display("Public:footer");
    }
}
?>