<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Work;

class WorkController extends Controller
{
    public function fetchWorks() {
    	$works = Work::orderBy('created_at', 'ASC')->get();

    	return $works;
    }

    public function addWork(Request $request) {
    	$name = $request->input('name');
    	$hours = $request->input('hours');

    	$work = new Work();
    	$work->name = $name;
    	$work->hours = $hours;

    	$work->save();

    	return ok("Work added!");
    }
}
