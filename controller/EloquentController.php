<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function Home()
    {
    	$data = Customer::all();
    	$isActive = Customer::Active()->get();
    	$isInactive = Customer::Inactive()->get();
    	$companies = Company::all();

        return view('welcome',compact('data','isActive','isInactive','companies'));
    }
}
