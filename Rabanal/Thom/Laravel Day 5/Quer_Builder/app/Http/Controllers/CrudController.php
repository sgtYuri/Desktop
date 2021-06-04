<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class CrudController extends Controller
{

    protected $model;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }

    public function index()
    {
        
     $db = $this->model->all();

     return dd($db);
        
    }

    public function create()
    {

    $db = $this->model->create([
    'name' => 'HRIS' 
]);

        return dd($db);
    }

    public function update()
    {

        $db = $this->model->find(1);
        $db->description = 'bakit kasi?';
        return dd($db->save());
    }

    public function delete()
    {
        $db = $this->model->find(2)->delete();

        return dd($db);
    }
}
