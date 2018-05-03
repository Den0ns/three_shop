<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;  
use app\admin\model\Attr;
use app\admin\model\Goodstype as Goodstype_model;

class Goodstype extends Controller
{
    public function goodstype_list()
    {
        $goodstype_model = new Goodstype_model();
        $goodstype       = $goodstype_model->select_goodstype();

        foreach ($goodstype as $key => $value) {
            $goodstype[$key]['attr_count']=Attr::where('type_id',$value['type_id'])->count();
        }
        return view('goods_type_list',['goodstype'=>$goodstype]);
    }
    public function goodstype_add()
    {
        if(Request()->isGet()){
            return view('goods_type_add');
        }
        if(Request()->isPost()){
            $goodstype_model = new Goodstype_model();
            $goodstype_model->data([
                'type_name'     =>input("post.type_name"),
                'is_enabled'    =>input("post.is_enabled")
            ]);
            if($goodstype_model->save()){
                $this->success("添加成功","Goodstype/goodstype_list");
            }else{
                $this->error('添加失败', 'Goodstype/goodstype_add');
            }
        }
    }

    public function goodstype_edit($type_id=null)
    {
        if(Request()->isGet()){
            $goodstype_model = new Goodstype_model();
            $this_goodstype  = $goodstype_model->find_goodstype($type_id);
            return view('goods_type_edit',['this_goodstype'=>$this_goodstype]);
        }
        if(Request()->isPost()){
            $goodstype_model = new Goodstype_model();
            if($goodstype_model->save([
                    'type_name'          =>  input("post.type_name"),
                    'is_enabled'         =>  input("post.is_enabled")
                ],['type_id'=>input("post.type_id")])){
                    $this->success('修改成功', 'Goodstype/goodstype_list');
                }else{
                    $this->error('修改失败', 'Goodstype/goodstype_list');
                }
        }
    }
    public function goodstype_del($type_id)
    { 
        $goodstype_model = new Goodstype_model();

        if($goodstype_model->destroy($type_id)){
            $this->success('删除成功', 'Goodstype/goodstype_list');
        }else{
            $this->error('删除失败', 'Goodstype/goodstype_list');
        }
    }
}
