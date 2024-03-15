<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index']]);
    // }

    public function index(): View
    {
        $contacts = Contact::all();
        return view('index', compact('contacts'));
    }

    public function dashboard(): View
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully');
    }

    public function show(Contact $contact): View
    {
        return view('contacts.show', compact('contact'));

    }

    public function edit(Contact $contact): View    {

        return view('contacts.edit', compact('contact'));

    }

    public function update(ContactRequest $request, Contact $contact): RedirectResponse
    {
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
}
