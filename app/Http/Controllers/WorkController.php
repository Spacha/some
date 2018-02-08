<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Work;

class WorkController extends Controller
{
    public function fetchWorks() {
    	$works = Work::orderBy('created_at', 'DESC')->get();

    	return $works;
    }

    public function addWork(Request $request) {
    	$name = $request->input('name');
    	$hours = $request->input('hours');
        $project_id = $request->input('projectId');

    	$work = new Work();
    	$work->name = $name;
    	$work->hours = $hours;
        $work->project_id = $project_id;

    	$work->save();

    	return ok("Work added!");
    }

    public function viewPrintable() {
        $works = Work::orderBy('created_at', 'DESC')->get();

        $totalHours = 0;
        foreach ($works as $work) {
            $totalHours += $work->hours;
        }
        
        return view('printable', [
            'works' => $works,
            'totalHours' => $totalHours
        ]);
    }
}
