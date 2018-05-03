<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   
use app\admin\model\Attr;
use app\admin\model\Goodstype;

class Attribute extends Controller
{
    public function attribute_list()
    {
        $type_id     = input("get.type_id");
        $attr        = Attr::all(['type_id'=>$type_id])->toArray();

        return view('attribute_list',['attr'=>$attr,'type_id'=>$type_id]);
    }
    public function attribute_add()
    {
        if(Request()->isGet()){
            $type_id     = input("get.type_id");
            return view('attribute_add',['type_id'=>$type_id]);
        }
        if(Request()->isPost()){
            $attr = new Attr();
            $type_id     = input("post.type_id");
            if($attr->data([
                'attr_name'     =>  input("post.attr_name"),
                'type_id'       =>  $type_id,
                'attr_type'     =>  input("post.attr_type"),
                'input_type'    =>  input("post.input_type"),
                'attr_values'   =>  input("post.attr_values")
            ])->save()){
                $this->success("添加成功","Attribute/attribute_list?type_id=$type_id");
            }else{
                $this->error('添加失败', "Attribute/attribute_add?type_id=$type_id");
            }
        }
    }

     public function attribute_edit()
    {
        if(Request()->isGet()){
            $attr_id = Request::instance()->param('attr_id');

            $attr    = Attr::get($attr_id)->toArray();
            return view('attribute_edit',['attr'=>$attr]);
        }
        if(Request()->isPost()){
            $type_id     = input("post.type_id");
            $attr = new Attr();
            if($attr->save([
                'attr_name'     =>  input("post.attr_name"),
                'type_id'       =>  $type_id,
                'attr_type'     =>  input("post.attr_type"),
                'input_type'    =>  input("post.input_type"),
                'attr_values'   =>  input("post.attr_values")
            ],['attr_id'=>input("post.attr_id")])){
                $this->success("修改成功","Attribute/attribute_list?type_id=$type_id");
            }else{
                $this->error("修改失败","Attribute/attribute_list?type_id=$type_id");
            }
        }
    }
    public function attribute_del()
    {
        $type_id = Request::instance()->param('type_id');
        $attr_id = Request::instance()->param('attr_id');
        if(Attr::destroy($attr_id)){
            $this->success('删除成功', "Attribute/attribute_list?type_id=$type_id");
        }else{
            $this->error('删除失败', "Attribute/attribute_list?type_id=$type_id");
        }
    }
}