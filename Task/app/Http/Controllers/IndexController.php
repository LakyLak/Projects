<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {

            /*$data = DB::table('tasks')->orderBy('priority', 'DESC')->get();*/
            $priority = DB::table('issues')
            ->join('companies', 'companies.id', '=', 'issues.company_id')
            ->select(DB::raw('sum(companies.score * issues.level) AS total_priority'))
            ->where('order_lines.product_id', $product->id)
            ->where('orders.order_status_id', 4)
            ->first();
            Task::create(['issue_id'=>'9', 'person_id'=>'9', 'priority'=>'9']);
            $data = Task::orderBy('priority', 'DESC')->get();
            return view('welcome', compact('data'));
    }
}
