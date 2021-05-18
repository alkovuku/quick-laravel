<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Book;

class StaffController extends Controller
{
    public function staff_add()
    {
        return view('staff.staff_add');
    }

    public function staff_add_check(Request $request)
    {
        return view('staff.staff_add_check', $request);
    }

    public function staff_add_done(Request $request)
    {
        $staff = new Staff();
        $staff->fill($request->except('_token'))->save();
        return view('staff.staff_add_done');
    }
}
