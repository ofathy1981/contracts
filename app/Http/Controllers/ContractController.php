<?php

namespace App\Http\Controllers;
use App\Console\Commands;
use App\Models\contract;
use App\Models\workdomain_fees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ContractController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
               // $contract=contract::all();
               $contract=contract::latest()->paginate(10);
               return view('contract.home',compact('contract'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contract.addcontract')->with('success','Created Succssefuly');

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
       
        // $request->validate([
        //     'name'=>'required',
        //     'contract_name'=>'required',
        //     'contract_client_name'=>'required',
        //     'contrcat_date'=>'required',
        //     'contrcat_status'=>'required',
        //     'contract_reft_number'=>'required',
        //     'contract_type'=>'required',
        //     'introduced_to_ar'=>'required',
        //     'introduced_to_en'=>'required',
        //     'client_country'=>'required',
        //    'agreement_date_ar'=>'required',
        //    'agreement_date_en'=>'required',
        //     'client_name_ar'=>'required',
        //     'client_address_en'=>'required',
        //     'client_address_ar'=>'required',
        //     'duration'=>'required',
        //     'duration_ar'=>'required',
        //     'sign_second_party'=>'required',
        //     'sign_second_party_mister'=>'required',
        //    'contract_date_ar'=>'required',
        //    'contract_date_en'=>'required'


        //     ] );


        $contract =  contract::create([
         'user_id' =>  Auth::id(),
         'contract_name'=>  $request->contract_name,
        'contract_client_name'=>  $request->contract_client_name,
        'contrcat_status'=>  $request->contrcat_status,
        'contract_reft_number'=>  $request->contract_reft_number,
        'contract_type'=>  $request->contract_type,
        'introduced_to_ar'=>  $request->introduced_to_ar,
        'introduced_to_en'=>  $request->introduced_to_en,
        'client_country'=>  $request->client_country,
       'agreement_date_ar'=>  $request->agreement_date_ar,
       'agreement_date_en'=>  $request->agreement_date_en,
        'client_name_ar'=>  $request->client_name_ar,
        'client_address_en'=>  $request->client_address_en,
        'client_address_ar'=>  $request->client_address_ar,
        'duration'=>  $request->duration,
        'duration_ar'=>  $request->duration_ar,
        'sign_second_party'=>  $request->sign_second_party,
        'sign_second_party_mister'=>  $request->sign_second_party_mister,
       'contract_date_ar'=>  $request->contract_date_ar,
       'contract_date_en'=>  $request->contract_date_en


        ]);
       // && $request->input('group-a['.$i.'][service_name_ar]') !="" && $request->input('group-a['.$i.'][service_cost_en]') !="" &&$request->input('group-a['.$i.'][service_cost_ar]') !="" &&$request->input('group-a['.$i.'][service_desc_en]') !=""&&$request->input('group-a['.$i.'][service_desc_ar]') !=""
//   for($i=0;$i<=10;$i++){
//       if($request->filled(strval("group-a[".$i."][service_name_en]")) )
//                         {
//         $wdf =new  workdomain_fees(); 
//         // $contract->workdomain_fees()->saveMany([
           
//         //     new workdomain_fees([
//         $wdf->contract_id = $contract->id; 
//         $wdf->service_name_en = $request->input(strval("group-a[".$i."][service_name_en]"));
//         $wdf->service_name_ar=  $request->input(strval("group-a[".$i."]service_name_ar]"));
//         $wdf->service_cost_en=  $request->input(strval("group-a[".$i."][service_cost_en]"));
//         $wdf->service_cost_ar= $request->input(strval("group-a[".$i."][service_cost_ar]"));
//         $wdf->service_desc_en= $request->input(strval("group-a[".$i."][service_desc_en]"));
//         $wdf->service_desc_ar=  $request->input(strval("group-a[".$i."][service_desc_ar]"));
//         $contract->workdomain_fees()->save($wdf);
        //     ]),

        // ]);  
    // }
    // else{
    //     $contract->workdomain_fees()->saveMany([
           
    //         new workdomain_fees([
    //             'service_name_en' =>  $request->service_name_en ,
    //             'service_name_ar'=>  $request->service_name_ar,
    //              'service_cost_en'=>  $request->service_cost_en,
    //               'service_cost_ar'=> $request->service_cost_ar,
    //              'service_desc_en'=> $request->service_desc_en,
    //              'service_desc_ar'=>  $request->service_desc_ar,
    //         ]),

    //     ]); 


    // }
//   }

$srvnameen = $request->input('service_name_en', []);
$srvcosten = $request->input('service_cost_en', []);
$srvdescen = $request->input('service_desc_en', []);

$srvnamear = $request->input('service_name_ar', []);
$srvcostar = $request->input('service_cost_ar', []);
$srvdescar = $request->input('service_desc_ar', []);





for ($i=0; $i < count($srvnameen); $i++) {
    // if ($srvnameen[$i] != '') {


        // $contract->workdomain_fees()->save($srvnameen[$i],$srvcosten[$i],$srvdescen[$i],$srvnamear[$i],$srvcostar[$i],$srvdescar[$i] );
    // }




        $contract->workdomain_fees()->save(
           
            new workdomain_fees([
                'service_name_en' =>  $srvnameen[$i] ,
                'service_name_ar'=>  $srvnamear[$i],
                 'service_cost_en'=>  $srvcosten[$i],
                  'service_cost_ar'=> $srvcostar[$i],
                 'service_desc_en'=> $srvdescen[$i],
                 'service_desc_ar'=>  $srvdescar[$i],
            ]),

        );















}

       // $contract=contract::create($request->all());
    //    foreach()
    //     $contract->workdomain_fees()->save($request->workdomain_fees);
        return redirect()->route('contract.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(contract $contract)
    {
        //
        return view('contract.show',compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(contract $contract,workdomain_fees $workdomain_fees)
    {
        //
        $workdomain_fees = workdomain_fees::all();
        $output = new \Symfony\Component\Console\Output\ConsoleOutput(1);
        error_log('ffffffffffffffffffffffffff');
        $output->writeln('hello');
        $contract->load('workdomain_fees');
        return view('contract.edit',compact('workdomain_fees','contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contract $contract,workdomain_fees $workdomain_fees)
    {
        //
        // $request->validate([
        //     'name'=>'required',
        //     'contract_name'=>'required',
        //     'contract_client_name'=>'required',
        //     'contrcat_date'=>'required',
        //     'contrcat_status'=>'required'
        //     ] );
        $contract->update($request->all());
        // $contract->workdomain_fees()->detach();

        $service_name_en = $request->input('service_name_en', []);
        $service_name_ar = $request->input('service_name_ar', []);
        $service_cost_en = $request->input('service_cost_en', []);
        $service_cost_ar = $request->input('service_cost_ar', []);
        $service_desc_en = $request->input('service_desc_en', []);
        $service_desc_ar = $request->input('service_desc_ar', []);
        // $id = $request->input('id', []);

  

        // $id = workdomain_fees::find('id');
        
        
        for ($i=0; $i < count($service_name_en); $i++) {
            $id = $request->input('id', []);

             if ($service_name_en[$i] != '') {
                $contract->workdomain_fees()->updateOrCreate(['id'=>$id[$i]],[
               'service_name_en'=>$service_name_en[$i],
               'service_name_ar'=> $service_name_ar[$i],
               'service_cost_en'=> $service_cost_en[$i],
               'service_cost_ar'=>$service_cost_ar[$i],
               'service_desc_en'=> $service_desc_en[$i],
               'service_desc_ar'=> $service_desc_ar[$i] ]);
           }
        //    else{
        //     $contract->workdomain_fees()->updateOrCreate([
        //         'service_name_en'=>$service_name_en[$i],
        //         'service_name_ar'=> $service_name_ar[$i],
        //         'service_cost_en'=> $service_cost_en[$i],
        //         'service_cost_ar'=>$service_cost_ar[$i],
        //         'service_desc_en'=> $service_desc_en[$i],
        //         'service_desc_ar'=> $service_desc_ar[$i] ]);
        //    }
        }






        return redirect()->route('contract.index')
        ->with('success','update success');
    }
































    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(contract $contract)
    {
        //
        $contract->delete();
        return redirect()->route('contract.index');
    }
}
