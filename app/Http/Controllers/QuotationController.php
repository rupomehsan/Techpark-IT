<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function hire_us()
    {
        return view('frontend/pages/hire_us');
    }

    public function hire_us_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'job_title' => 'required',
            'employees' => 'required',
            'yearly_turnover' => 'required',
            'type_of_business' => 'required',
            'message' => 'required',
        ]);

        $quotation = new Quotation();
        $quotation->name = $request->name;
        $quotation->company_name = $request->company_name;
        $quotation->phone = $request->phone;
        $quotation->email = $request->email;
        $quotation->job_title = $request->job_title;
        $quotation->no_of_employee = $request->employees;
        $quotation->industry_type = $request->type_of_business;
        $quotation->yearly_turnover = $request->yearly_turnover;
        $quotation->description = $request->message;
        $quotation->creator = auth()->id();
        $quotation->slug = Str::slug($request->name);
        $quotation->save();

        return redirect()->back()->with('success', 'Quotation submitted successfully');
    }
}
