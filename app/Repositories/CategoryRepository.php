<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    public function getList($type = null)
    {
        if($type){
            return $this->category->type($type)->get();
        }
        return $this->category->get();
    }
    
    public function create($fields)
    {
        Category::create($fields);
    }
    
    public function delete($id)
    {
        $category = Category::with('vehicles')->findOrFail($id);
        if($category->vehicles->isEmpty()){
            $category->delete();
            return true;
        }
        return false;
    }
    
    public function update($id,$name)
    {
        $category = Category::findOrFail($id);
        $category->name = $name;
        $category->save();
    }
}