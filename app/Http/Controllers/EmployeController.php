<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['employes']= Employe::latest()->paginate(10);
        $data['serial'] = $data['employes']->currentPage() != 1 ? $data['employes']->perPage()*($data['employes']->currentPage()-1)+1 : 1; 
        return view('Employe.manageEmploye',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['companies']= Company::select('id','name')->latest()->get();
        return view('Employe.insertEmploye',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'company_id'=>'required',
            'email'=>'required|email:rfc,dns|unique:employes',
        ]);
        $employe = new Employe();
        $employe->name = $request->name;
        $employe->company_id = $request->company_id;
        $employe->email = $request->email;
        $employe->phone = $request->phone;
        session()->flash('message','Employe Added SUccessFully');
        $employe->save();
        return redirect()->route('employe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['employe']= Employe::findOrFail($id);
        $data['companies']= Company::select('id','name')->latest()->get();
        return view('Employe.editemploye',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'company_id'=>'required'
        ]);
        $employe = Employe::find($id);
        $employe->name = $request->name;
        $employe->company_id = $request->company_id;
        $employe->email = $request->email;
        $employe->phone = $request->phone;
        session()->flash('message','Employe Update SUccessFully');
        $employe->update();
        return redirect()->route('employe.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();
        session()->flash('danger','Employe Deleted SuccessFully');
        return redirect()->back();
    }
}
