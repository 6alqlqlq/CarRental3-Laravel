<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;

class ContactformController extends Controller
{
    public function contactUS()
    {
        return view('contactus');
    }  

    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'subject'=>'required',
         'message' => 'required'
         ]);
  
        ContactUS::create($request->all());
  
        return back()->with('success', 'Thanks for contacting us!');
    }

    public function index()
    { 
        $msges = ContactUS::paginate(10);

        return view('contact-us.index', compact('msges'));
    }
    
    public function create()
    {
        return view('contact-us.create');
    } 
    
    public function show($id)
    {
        $msge = ContactUS::findOrFail($id);

        return view('contact-us.show', compact('msge'));
    }
   
    public function destroy($id)
    {
        ContactUS::where('id', $id)->delete();

        return redirect('/admin/contact-us-management');
    }

    public function multipleContactDelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $msge) 
		{
			ContactUS::where('id', $msge)->delete();
		}
		return redirect()->back();
	}

}
