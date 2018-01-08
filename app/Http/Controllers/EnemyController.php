<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enemy;

class EnemyController extends Controller
{
    //
    public function index()
    {
        return Enemy::take(5)->get()->keyBy('id');
    }

    public function store(Request $request)
    {
        return Enemy::create($request->only('class'))->save()->fresh();
    }

    public function destroy($id)
    {
        return Enemy::destroy($id);
    }

   /*
	 public function update($id, Request $request)
    {
        return Enemy::find($id)->fill($request->only('is_done'))
               ->save()->fresh();
    }
	*/
}
