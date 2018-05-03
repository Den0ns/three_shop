<?php
namespace app\admin\Controller;
use app\admin\controller\Common;
use think\Request;   
use app\admin\model\Cat as Cat_Model;

class Cat extends Common
{   
    //商品分类列表
    public function cat_list()
    {
        $cat_model = new Cat_Model();
        $cat_data = $cat_model->select_cat();
        $cat_data = $this->getflag($cat_data,0,1,'cat_id');
        return view('cat_list',['cat'=>$cat_data]);
    }
    //商品分类添加
    public function cat_add()
    {
        if(request()->isGet()){
            $cat_data = Cat_Model::select()->toArray();
            $cat_data = $this->getflag($cat_data,0,1,'cat_id');
            return view('cat_add',['cat'=>$cat_data]);
        }
        if(request()->isPost()){
            $cat = new Cat_Model;
            $cat->data([
                'cat_name'          =>  input("post.cat_name"),
                'parent_id'         =>  input("post.parent_id"),
                'is_show'           =>  input("post.is_show"),
                'is_show_nav'       =>  input("post.is_show_nav")
            ]);
            if($cat->save()){
                $this->success('添加成功', 'Cat/cat_list');
            }else{
                $this->error('添加失败', 'Cat/cat_add');
            }
        }
    }
    //商品分类 编辑
    public function cat_edit($cat_id=null)
    {
        if(request()->isGet()){
            $cat_model = new Cat_Model();
            $this_cat  = $cat_model->find_cat($cat_id);
            $cat_data = $cat_model->select_cat();
            $cat_data = $this->getflag($cat_data,0,1,'cat_id');
            return view('cat_edit',['cat'=>$cat_data,'this_cat'=>$this_cat]);
        }
        if(request()->isPost()){
            if(Cat_Model::all(['parent_id'=>$cat_id])->toArray()){
                $this->error('该分类下存在子分类,不可修改', 'Cat/cat_list');
            }else{
                $cat_model = new Cat_Model();
                if($cat_model->save([
                    'cat_name'          =>  input("post.cat_name"),
                    'parent_id'         =>  input("post.parent_id"),
                    'is_show'           =>  input("post.is_show"),
                    'is_show_nav'       =>  input("post.is_show_nav")
                ],['cat_id'=>input("post.cat_id")])){
                    $this->success('修改成功', 'Cat/cat_list');
                }else{
                    $this->error('修改失败', 'Cat/cat_list');
                }
            }
        }
    }
    public function cat_del($cat_id)
    {
        if(Cat_Model::all(['parent_id'=>$cat_id])->toArray()){
            $this->error('请删除此分类下的子分类', 'Cat/cat_list');
        }else{
            if(Cat_Model::destroy($cat_id)){
                $this->success('删除成功', 'Cat/cat_list');
            }else{
                $this->error('删除失败', 'Cat/cat_list');
            }
        }
    }
}