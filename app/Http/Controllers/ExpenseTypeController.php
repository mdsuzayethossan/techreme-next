<?php

namespace App\Http\Controllers;

use App\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{
    public function view()
    {
        $data['title'] = 'Add New';
        $data['owners'] = ExpenseType::all();
        return view('techreme.techreme_pages.expense.expense_type', $data);
    }
}
