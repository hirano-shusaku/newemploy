<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeCreateRequest;
use Carbon\Carbon;
use App\Services\employeUpdate;

class EmployeController extends Controller
{
    
    public function index()
    {
        $employes = Employe::orderBy('firstDay', 'asc')->get();
        $user = auth()->user();
        $now = Carbon::now(); // 現在時刻
        return view('employe.index', compact('employes', 'user', 'now'));
    }

    
    public function create()
    {
        return view('employe.create');
    }

    
    public function store(EmployeCreateRequest $request)
    {
        $request->validated();

         Employe::create([
            'user_id' => auth()->user()->id,
            'name' => $request['name'],
            'yomigana' => $request['yomigana'],
            'company' => $request['company'],
            'Tnumber' => $request['Tnumber'],
            'depart' => $request['depart'],
            'section' => $request['section'],
            'job' => $request['job'],
            'firstDay' => $request['firstDay'],
            'startDay' => $request['startDay'],
            'endDay' => $request['endDay'],
            'term' => $request['term'],
            'workType' => $request['workType'],
            'hcost' => $request['hcost'],
            'tmcost' => $request['tmcost'],
            'tdcost' => $request['tdcost'],
            'troute' => $request['troute'],
            'pnumber' => $request['pnumber'],
            'pname' => $request['pname'],
            'tcontent' => $request['tcontent'],
            'HAname' => $request['HAname'],
            'HAemail' => $request['HAemail'],
            'remark' => $request['remark'],
            'confirmer' => $request['confirmer'],
            'Cemail' => $request['Cemail'],
            'CostMemo' => $request['CostMemo'],
            'kairan1' => $request['kairan1'],
            'kairan2' => $request['kairan2'],
            'kairan3' => $request['kairan3'],
            'kairan4' => $request['kairan4'],
            'kairan5' => $request['kairan5'],
            'CCmycompany1' => $request['CCmycompany1'],
            'CCmycompany2' => $request['CCmycompany2'],
            'CCmycompany3' => $request['CCmycompany3'],
            'CCmycompany4' => $request['CCmycompany4l'],
            'CCmycompany5' => $request['CCmycompany5'],
            'CCmycompany6' => $request['CCmycompany6'],
            'CChaken1' => $request['CChaken1'],
            'CChaken2' => $request['CChaken2'],
            'CChaken3' => $request['CChaken3'],
            'CChaken4' => $request['CChaken4'],
            'CChaken5' => $request['CChaken5'],
            'CChaken6' => $request['CChaken6'],
            'report1' => $request['report1'],
            'report2' => $request['report2'],
            'report3' => $request['report3'],
            'report4' => $request['report4'],
            'report5' => $request['report5'],
            'report6' => $request['report6']
        ]);
        // dd($employe);
        return to_route('employe.create')->with('message','新規の派遣社員を登録しました');
    }

    
    public function show(Employe $employe)
    {
        return view('employe.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employe.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeCreateRequest $request, Employe $employe)
    {
        $request->validated();
        // dd($request);
        
        $employe->name = $request->name;
        $employe->yomigana = $request->yomigana;
        $employe->company = $request->company;
        $employe->Tnumber = $request->Tnumber;
        $employe->depart = $request->depart;
        $employe->section = $request->section;
        $employe->job = $request->job;
        $employe->firstDay = $request->firstDay;
        $employe->startDay = $request->startDay;
        $employe->endDay = $request->endDay;
        $employe->term = $request->term;
        $employe->workType = $request->workType;
        $employe->hcost = $request->hcost;
        $employe->tmcost = $request->tmcost;
        $employe->tdcost = $request->tdcost;
        $employe->troute = $request->troute;
        $employe->pnumber = $request->pnumber;
        $employe->pname = $request->pname;
        $employe->tcontent = $request->tcontent;
        $employe->HAname = $request->HAname;
        $employe->HAemail = $request->HAemail;
        $employe->remark = $request->remark;
        $employe->confirmer = $request->confirmer;
        $employe->Cemail = $request->Cemail;
        $employe->CostMemo = $request->CostMemo;
        $employe->kairan1 = $request->kairan1;
        $employe->kairan2 = $request->kairan2;
        $employe->kairan3 = $request->kairan3;
        $employe->kairan4 = $request->kairan4;
        $employe->kairan5 = $request->kairan5;
        $employe->CCmycompany1 = $request->CCmycompany1;
        $employe->CCmycompany2 = $request->CCmycompany2;
        $employe->CCmycompany3 = $request->CCmycompany3;
        $employe->CCmycompany4 = $request->CCmycompany4;
        $employe->CCmycompany5 = $request->CCmycompany5;
        $employe->CCmycompany6 = $request->CCmycompany6;
        $employe->CChaken1 = $request->CChaken1;
        $employe->CChaken2 = $request->CChaken2;
        $employe->CChaken3 = $request->CChaken3;
        $employe->CChaken4 = $request->CChaken4;
        $employe->CChaken5 = $request->CChaken5;
        $employe->CChaken6 = $request->CChaken6;
        $employe->report1 = $request->report1;
        $employe->report2 = $request->report2;
        $employe->report3 = $request->report3;
        $employe->report4 = $request->report4;
        $employe->report5 = $request->report5;
        $employe->report6 = $request->report6;

        $employe->save();
        
        return to_route('employe.show', $employe)->with('message','派遣社員情報を更新しました');
    }

    
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return to_route('employe.index')->with('message', '派遣社員を退職に移動させました');
    }

    

    public function getDelete()
    {
        $user = auth()->user();
        $trashEmploys = Employe::onlyTrashed()->get();
        // dd($trashEmploys);
        return view('employe.getDelete', compact('user','trashEmploys'));
    }

    public function deleteShow($id)
    {
        $employe = Employe::onlyTrashed()->where('id', $id)->first();
        // dd($employe);
        return view('employe.deleteShow',compact('employe'));
    }

    public function delete($id)
    {
        // dd($id);
        $sakujo = Employe::onlyTrashed()->where('id',$id)->forceDelete();
        
        return to_route('employe.getDelete')->with('message', '派遣社員を完全に削除しました');
    }

    public function revival($employe)
    {
        Employe::onlyTrashed()->where('id', $employe)->restore();
        return to_route('employe.index')->with('message', '派遣の方を復元しました');
    }

    public function newringi(Employe $employe)
    {
        return view('employe.newringi', compact('employe'));
    }

    public function ringi(Employe $employe)
    {
        return view('employe.ringi', compact('employe'));
    }

    public function bunai(Employe $employe)
    {
        $user = auth()->user();
        return view('employe.bunai', compact('employe', 'user'));
    }

    public function hakenmoto(Employe $employe)
    {
        $user = auth()->user();
        return view('employe.hakenmoto', compact('employe','user'));
    }

    public function index1()
    {
        $employes = Employe::where('depart', 'like' ,'%第2開発1部')->orderBy('endDay', 'asc')->get();
        // dd($employes);
        $now = Carbon::now(); // 現在時刻
        return view('employe.index1', compact('employes', 'now'));
    }

    public function index2()
    {
        $employes = Employe::where('depart', 'like' ,'%第2開発2部')->orderBy('endDay', 'asc')->get();
        // dd($employes);
        $now = Carbon::now(); // 現在時刻
        return view('employe.index2', compact('employes','now'));
    }

    public function index3()
    {
        $employes = Employe::where('depart' ,'not like','%第2開発1部')
                    ->where('depart', 'not like','%第2開発2部')
                    ->orderBy('endDay', 'asc')->get();
        //  dd($employes);
        $now = Carbon::now(); // 現在時刻
        return view('employe.index3', compact('employes','now'));
    }

    public function mypost()
    {
        $user = auth()->user()->id;
        $employes = Employe::where('user_id', $user)->get();
        $now = Carbon::now(); // 現在時刻

        return view('employe.mypost', compact('user', 'employes', 'now'));
    }

   
}
