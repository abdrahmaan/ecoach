<?php

namespace App\Http\Controllers\Admin;

use App\Models\Player;
use App\Models\Group;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PlayerController extends Controller
{
 
    public function index()
    {

        $players = Player::all();
        $Groups = Group::all();
        $Branches = Branch::all();


        return view('admin.player.index',["players"=>$players,"Groups" => $Groups,"Branches" => $Branches]);
    }


    public function create()
    {
        $GroupsName = Group::all();
        $BranchesName = Branch::all();
        
        $passData = [
            "groups"=> $GroupsName,
            "branches"=>$BranchesName];

        return view("admin.player.create", $passData);
    }

    public function store(Request $request)
    {

      $file =  $request->file('PlayerImage');

      
        if($file !== null){

            $fileName = time() . ".jpg";

            $file->move(public_path('playerimages'),$fileName); 

            Player::create([
                "PlayerName" => $request->PlayerName,
                "Age" => $request->Age,
                "Address" => $request->Address,
                "Phone1" => $request->Phone,
                "Phone2" => $request->Phone2,
                "DateOfBirth" => $request->DateOfBirth,
                "Position" => $request->Position,
                "Height" => $request->Height,
                "Weight" => $request->Weight,
                "GroupName" => $request->GroupName,
                "BranchName" => $request->BranchName,
                "CategoryName" => $request->CategoryName,
                "Status" => "Active",
                "VideoLink" =>$request->VideoLink,
                "ImagePath" =>$fileName,
                "TotalPhy" => 0,
                "TotalAdaKhaty" => 0,
                "TotalMahary" => 0,
                "TotalMentalState" => 0,
                "TotalBrainState" => 0
            ]);




        return redirect("/admin/players/create")->with("message","yes");


        } else {

        Player::create([
            "PlayerName" => $request->PlayerName,
            "Age" => $request->Age,
            "Address" => $request->Address,
            "Phone1" => $request->Phone,
            "Phone2" => $request->Phone2,
            "DateOfBirth" => $request->DateOfBirth,
            "Position" => $request->Position,
            "Height" => $request->Height,
            "Weight" => $request->Weight,
            "GroupName" => $request->GroupName,
            "BranchName" => $request->BranchName,
            "CategoryName" => $request->CategoryName,
            "Status" => "Active",
            "VideoLink" =>$request->VideoLink,
            "TotalPhy" => 0,
            "TotalAdaKhaty" => 0,
            "TotalMahary" => 0,
            "TotalMentalState" => 0,
            "TotalBrainState" => 0
        ]);


        return redirect("/admin/players/create")->with("message","yes");
        

        }

        return dd($request->all());
        // return view('admin.index',["req"=>$request->all()]);
    }

    
    public function show($id)
    {

        return view("admin.player.show")->with('id',$id);

    }

    public function edit($id) 
    {
        $GroupsName = Group::all();
        $BranchesName = Branch::all();
        
        $passData = [
            "groups"=> $GroupsName,
            "branches"=>$BranchesName];

        $data = Player::where("id",$id)->get()->first();
        return view("admin.player.edit", ["Player" => $data, 'groups'=> $GroupsName, 'branches'=> $BranchesName]);

    }

    public function update(Request $request, $id)
    {
        $file =  $request->file('PlayerImage');

      
        if($file !== null){

            $fileName = time() . ".jpg";

            $file->move(public_path('playerimages'),$fileName); 

            Player::where("id",$id)->update([
                "PlayerName" => $request->PlayerName,
                "Age" => $request->Age,
                "Address" => $request->Address,
                "Phone1" => $request->Phone,
                "Phone2" => $request->Phone2,
                "DateOfBirth" => $request->DateOfBirth,
                "Position" => $request->Position,
                "Height" => $request->Height,
                "Weight" => $request->Weight,
                "GroupName" => $request->GroupName,
                "BranchName" => $request->BranchName,
                "CategoryName" => $request->CategoryName,
                "VideoLink" =>$request->VideoLink,
                "ImagePath" =>$fileName,
            ]);




        return redirect("/admin/players")->with("message","yes");


        } else {

            Player::where("id",$id)->update([
                "PlayerName" => $request->PlayerName,
                "Age" => $request->Age,
                "Address" => $request->Address,
                "Phone1" => $request->Phone,
                "Phone2" => $request->Phone2,
                "DateOfBirth" => $request->DateOfBirth,
                "Position" => $request->Position,
                "Height" => $request->Height,
                "Weight" => $request->Weight,
                "GroupName" => $request->GroupName,
                "BranchName" => $request->BranchName,
                "CategoryName" => $request->CategoryName,
                "VideoLink" =>$request->VideoLink,
            ]);
        return redirect("/admin/players")->with("message","yes");

    }
}

    
    public function getAllPlayers(){

      $data =  Player::get();

      $res = array();

      $res["status"] = 1;
      $res["response"] = $data;

      return response()->json($res);

    }

    public function ToggleActivePlayer($type,$id){

      if($type == "Active"){

        $update = Player::where("id",$id)->update([
               "Status" => "UnActive" 
        ]);

      }  else {
        $update = Player::where("id",$id)->update([
            "Status" => "Active" 
         ]);
      }
      session()->flash("message","done");
      return redirect('/admin/players');

    }

    public function destroy($id)
    {
        return 'Page delete Player id With: ' . $id;
    }
}
