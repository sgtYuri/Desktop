<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;
use Redirect;

class StatisticController extends Controller
{
    protected $statistic;
    protected $request;

    protected $rules = [

  
        'height' => 'required',
        'weight' => 'required',
      

];

    public function __construct(Statistic $statistic, Request $request)
    {
        $this->statistic = $statistic;
        $this->request = $request;
    }
    public function index($id)
    {
        $find = $this->statistic->wherePersonnel_id($id);
        if (!$find->exists()) {
            return view('form.bmi.create')->with([
                'id' => $id
            ]);
        }
        return view('form.bmi.update')->with([
            'data' => $find->first()
        ]);
    }
    public function create($id)
    {
        $this->request->validate(
            $this->rules
        );
        $this->request->merge([
            'personnel_id' => $id,
            'bmi' => $this->computeBmi()
        ]);

        $this->statistic->create(
            $this->request->except('_token')
        );
        return Redirect::route('index')->with([
            'message' => 'BMI has been set'
        ]);
    }

    public function computeBmi()
    {
        $w = $this->request->weight;
        $h = $this->request->height;

        return $w / pow( $h * 0.01, 2);
    }
    public function update($id)
    {
    $this->request->validate(
        $this->rules
    );
    $this->request->merge([
        'bmi' => $this->computeBmi()
    ]);

    $this->statistic->find($id)->update(
        $this->request->except('_token')
    );
    return Redirect::route('index')->with([
        'success' => 'BMI has been updated'
    ]);
}
}