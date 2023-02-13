<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Player;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;

        $Player = Player::select('id','PlayerName')->where('id',$id)->get()->first();

        return view('admin.skill.create', ["Player"=> $Player] );

    }
    public function new(Request $request)
    {
        $id = $request->id;

        $Player = Player::select('id','PlayerName')->where('id',$id)->get()->first();

        return view('admin.skill.create', ["Player"=> $Player] );

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
            'Skills' => 'required'
        ],[
            'Skills.required' => 'من فضلك أدخل المهارات'
        ]);

      $add = Skill::create($request->all());
      $add->save();
      $request->session()->flash("message","تم تسجيل المهارة بنجاح");
      return redirect("/admin/players");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        
        return view("admin.skill.edit",["id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Skill::where("id",$id)->delete();

        session()->flash("message","تم حذف التقييم بنجاح");
        return redirect("/admin/players");
    }
}
