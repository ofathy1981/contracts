<?php

namespace App\Http\Controllers;

use App\Models\workdomain_fees;
use Illuminate\Http\Request;

class WorkdomainFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $wdf =  workdomain_fees::create([
           
            'service_name_en'=>  $request->service_name_en,
           'service_name_ar'=>  $request->service_name_ar,
           'service_cost_en'=>  $request->service_cost_en,
           'service_cost_ar'=>  $request->service_cost_ar,
           'service_desc_en'=>  $request->service_desc_en,
           'service_desc_ar'=>  $request->service_desc_ar,

   
   
           ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workdomain_fees  $workdomain_fees
     * @return \Illuminate\Http\Response
     */
    public function show(workdomain_fees $workdomain_fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workdomain_fees  $workdomain_fees
     * @return \Illuminate\Http\Response
     */
    public function edit(workdomain_fees $workdomain_fees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workdomain_fees  $workdomain_fees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workdomain_fees $workdomain_fees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workdomain_fees  $workdomain_fees
     * @return \Illuminate\Http\Response
     */
    public function destroy(workdomain_fees $workdomain_fees)
    {
        //
        $workdomain_fees->delete();
        return redirect()->back();
    }



    public function delete($id)
    {
        //
        $service=workdomain_fees::find($id);
        $service->delete();
      //  return response()->json(['success'=>'service has been deleted']);
      return redirect()->back();
    }
}
