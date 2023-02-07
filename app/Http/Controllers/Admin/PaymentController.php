<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Payment;
use App\Models\Branch;
use App\Models\Group;
use App\Models\Player;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        $branchs = Branch::all();

         return view('admin.payment.index', ["Branches"=>$branchs,"Groups"=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $player = Player::where("id",$id)->get()->first();

        return view('admin.payment.create', ["Player"=>$player]);

    }


    public function getAllPayements(){

        $data = Payment::all();

        $response = response()->json($data);

        return $response;
        // return "hello";
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
            'Amount'=>'required|numeric'
        ],[
            'Amount.required' => 'من فضلك ادخل قيمة الإشتراك',
            'Amount.numeric' => 'من فضلك أدخل القيمة بالأرقام'
        ]);


        $insert = Payment::create([
            'PlayerCode'=> $request->PlayerCode,
            'PlayerName'=> $request->PlayerName,
            'Amount'=> $request->Amount,
            'GroupName'=> $request->GroupName,
            'Branch'=> $request->BranchName,
            'User'=> session()->get('user-data')->FullName ,
        ]);
        session()->flash("message","تم دفع الإشتراك لـ $request->PlayerName");
        return redirect('/admin/players');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $deletePayment = Payment::where("id",$id)->delete();
        
        session()->flash("message","تم حذف دفع الإشتراك");

        return redirect("/admin/payments");

    }
}
