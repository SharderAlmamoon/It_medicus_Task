<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['companies'] = Company::latest()->paginate(10);
        $data['serial'] = $data['companies']->currentPage() != 1 ? $data['companies']->perPage()*($data['companies']->currentPage()-1)+1 : 1; 
        return view('Company.managecompany',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.insertcompany');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        if($request->logo){
            $logoImage = $request->File('logo');
            $logoName = rand(00000,99999).'.'.$logoImage->getClientOriginalExtension();
            $logoPath = public_path('CompanyImage/'.$logoName); 
            Image::make($logoImage)->save($logoPath);
            $company->logo = $logoName;
        }
        $company->save();
        session()->flash('message','Company Created SuccessFully');
        return redirect()->route('Company.index');
       
    }
    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $data['company'] = Company::find($id);
       return view('Company.editcompany',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        if($request->logo){
            if(File::exists('Comapany/'.$company->logo)){
                File::delete('Comapany/'.$company->logo);}
            $logoImage = $request->File('logo');
            $logoName = rand(00000,99999).'.'.$logoImage->getClientOriginalExtension();
            $logoPath = public_path('CompanyImage/'.$logoName); 
            Image::make($logoImage)->save($logoPath);
            $company->logo = $logoName;
        }
        $company->update();
        session()->flash('message','Company Updated SuccessFully');
        return redirect()->route('Company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        if(File::exists('Comapany/'.$company->logo)){
            File::delete('Comapany/'.$company->logo);}
        $company->delete();
        session()->flash('danger','Company DELETED SuccessFully');
        return redirect()->route('Company.index');
    }
}
