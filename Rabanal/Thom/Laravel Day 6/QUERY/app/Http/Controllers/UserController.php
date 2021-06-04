<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $User)
    {
        $this->model = $User;
    }

    public function create()
    {

    $db = $this->model->create([
    'name' => 'thom',
    'age' => '28',
    'birthday' => '1993-02-22',
    'status' => 'single',
]);

return dd($db);
    }

    public function update()
    {

        $db = $this->model->find(1)->update([
            'Age' => '27'
        ]);
        return dd($db->save());
    }

    public function delete()
    {
        $db = $this->model->find(1)->delete();

        return dd($db);
    }

    public function get()
    {
        $db = $this->model->get();

        return dd($db);
    }
}
