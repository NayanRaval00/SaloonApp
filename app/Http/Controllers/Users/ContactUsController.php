<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactUs::create($validatedData);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function termAndCondition()
    {
        return view('Users.web.terms_and_condition.index');
    }


    public function list()
    {

        $contacts = ContactUs::paginate(10);

        return view('Admin.contactus.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contact.list')
            ->with('success', 'Contact message deleted successfully');
    }
}
