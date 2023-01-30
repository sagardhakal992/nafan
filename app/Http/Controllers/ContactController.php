<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Http\Requests\Contact\ContactRequest;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(ContactRequest $contactRequest)
    {
        $data = $contactRequest->validated();
        $contact = Contact::create($data);
        return redirect()->back();
    }

    public function index()
    {
        try{
            $contacts = Contact::paginate(20);
            return ResponseJson::success($contacts,"Contacts listed SuccessFully");
        }
        catch(Exception $exception)
        {
            return ResponseJson::fail([], $exception->getMessage(), 400);
        }
    }
}
