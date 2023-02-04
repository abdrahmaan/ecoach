<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;

use App\Models\Player;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class GroupController extends Controller
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

        $Groups = Group::all();
        $Branches = Branch::all();

        $passData = ["Groups"=>$Groups,"Branches"=>$Branches];
        
        
        return view('admin.group.create', $passData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       


        $time = $request->Time;


        $Hour = explode(":",strval($time))[0];
        $Min = explode(":",strval($time))[1];
        $newHour;
        $stat; 

        if($Hour == "00"){

            $newHour = "12";
            $stat = "صباحاً";

        } elseif($Hour == "12"){
            $newHour = "12";
            $stat = "مساء";
            
        } elseif ($Hour > 12){
            $newHour = intval($Hour) - 12;
            $stat = "مساء";
            
        } elseif ($Hour < 12) {
            $newHour = $Hour;
            $stat = "صباحاً";

        }

        

       $Time =  "$newHour:$Min $stat";


       $insert = Group::create([
            'GroupName'=> $request->GroupName,
            'Day' => $request->Day,
            'Time' => $Time,
            'BranchName' => $request->BranchName
        ]);

        $insert->save();
        
        return redirect("/admin/groups/create")->with("message","yes");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data = Group::where("id",$id)->first();
        $Branches = Branch::all();
        
        return view('admin.group.edit',["Group"=>$data,"Branches"=>$Branches]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $time = $request->Time;


        $Hour = explode(":",strval($time))[0];
        $Min = explode(":",strval($time))[1];
        $newHour;
        $stat; 

        if($Hour == "00"){

            $newHour = "12";
            $stat = "صباحاً";

        } elseif($Hour == "12"){
            $newHour = "12";
            $stat = "مساء";
            
        } elseif ($Hour > 12){
            $newHour = intval($Hour) - 12;
            $stat = "مساء";
            
        } elseif ($Hour < 12) {
            $newHour = $Hour;
            $stat = "صباحاً";

        }

        

       $Time =  "$newHour:$Min $stat";


       $UpdateGroup = Group::where('id',$id)->update([
            'GroupName'=> $request->GroupName,
            'Day' => $request->Day,
            'Time' => $Time,
            'BranchName' => $request->BranchName
        ]);

        $newGroupName = "$request->GroupName - $request->Day - $Time";

       $UpdatePlayers = Player::where('GroupName',$request->OldName)->update([
            'GroupName'=> $newGroupName,
        ]);

        
        return redirect("/admin/groups/create")->with("message","yes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Group::where('id',$id)->delete();

        return redirect("/admin/groups/create")->with("message","yes");
    }
}
