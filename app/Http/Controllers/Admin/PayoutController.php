<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Payout;
use App\Models\Branch;
use Illuminate\Http\Request;

class PayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchs = Branch::all();

        return view('admin.payout.index' , ["Branches"=>$branchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $branchs = Branch::all();

        return view('admin.payout.create' , ["Branches"=>$branchs]);
        
    }



     public function  getAllPayouts()
    {
            $data = Payout::all();
            $response = response()->json($data);

            return $response;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        
        $request->validate([
            'Desc' => 'required|regex:/[ء-ي\s]/',
            'Type' => 'required',
            'Amount'=> 'required|numeric',
            'Branch' => 'required',
        ],[
            'Desc.required' => 'من فضلك ادخل البيان',
            'Desc.regex' => 'من فضلك ادخل البيان بالعربية',
            'Type.required' => 'من فضلك أدخل النوع',
            'Amount.required' => 'من فضلك أدخل القيمة',
            'Amount.numeric' => 'من فضلك أدخل القيمة بالأرقام',
            'Branch.required' => 'من فضلك أدخل الفرع',

        ]);


             $insert =  Payout::create([
                'Desc' => $request->Desc,
                'Type' => $request->Type,
                'Amount'=> $request->Amount,
                'Branch' => $request->Branch,
                'User' => $request->session()->get('user-data')->FullName,

                ]);
                $insert->save();
                session()->flash("message","تم تسجيل المصروف بنجاح");
                return redirect("/admin/payouts/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function show(Payout $payout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function edit(Payout $payout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payout $payout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Payout::where("id",$id)->delete();

        session()->flash("message","تم حذف المصروف بنجاح");
        return redirect("/admin/payouts");
    }
}
