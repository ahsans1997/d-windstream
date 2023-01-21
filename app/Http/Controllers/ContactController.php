<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact',[
            'contact' => Contact::find(1),
            'title' => 'Contact Us',
        ]);
    }

    public function index()
    {
        return view('admin.contact',[
            'contact' => Contact::find(1),
        ]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        if($request->enquiryphone && $request->enquiryemail && $request->enquiryaddress){
            $validated = $request->validate([
                'enquiryphone' => 'required',
                'enquiryemail' => 'required',
                'enquiryaddress' => 'required',
            ]);
            $enquiry = [
                'enquiryphone' => $request->enquiryphone,
                'enquiryemail' => $request->enquiryemail,
                'enquiryaddress' => $request->enquiryaddress,
            ];
            $enquiries = json_encode($enquiry);
            $contact->enquiries = $enquiries;
        }

        if($request->accommodationboysphone && $request->accommodationboysemail && $request->accommodationfemalephone && $request->accommodationfemaleemail){
            $validated = $request->validate([
                'accommodationboysphone' => 'required',
                'accommodationboysemail' => 'required',
                'accommodationfemalephone' => 'required',
                'accommodationfemaleemail' => 'required',
            ]);
            $accommodation = [
                'boys' => [
                    'accommodationboysphone' => $request->accommodationboysphone,
                    'accommodationboysemail' => $request->accommodationboysemail,
                ],
                'female' => [
                    'accommodationfemalephone' => $request->accommodationfemalephone,
                    'accommodationfemaleemail' => $request->accommodationfemaleemail,
                ],
            ];
            $accommodations = json_encode($accommodation);
            $contact->accommodation = $accommodations;
        }

        if($request->emergencymedicalphone && $request->emergencymedicalemail && $request->emergencyproctorialphone && $request->emergencyproctorialemail){
            $validated = $request->validate([
                'emergencymedicalphone' => 'required',
                'emergencymedicalemail' => 'required',
                'emergencyproctorialphone' => 'required',
                'emergencyproctorialemail' => 'required',
            ]);
            $emergency = [
                'medical' => [
                    'emergencymedicalphone' => $request->emergencymedicalphone,
                    'emergencymedicalemail' => $request->emergencymedicalemail,
                ],
                'proctorial' => [
                    'emergencyproctorialphone' => $request->emergencyproctorialphone,
                    'emergencyproctorialemail' => $request->emergencyproctorialemail,
                ],
            ];
            $emergencies = json_encode($emergency);
            $contact->emergency = $emergencies;
        }

        if($request->examphone && $request->examemail){
            $validated = $request->validate([
                'examphone' => 'required',
                'examemail' => 'required',
            ]);
            $exam = [
                'examphone' => $request->examphone,
                'examemail' => $request->examemail,
            ];
            $exams = json_encode($exam);
            $contact->exam = $exams;
        }

        if($request->libraryphone && $request->libraryemail){
            $validated = $request->validate([
                'libraryphone' => 'required',
                'libraryemail' => 'required',
                'libraryonlinesupport' => 'required',
            ]);
            $library = [
                'libraryphone' => $request->libraryphone,
                'libraryemail' => $request->libraryemail,
                'libraryonlinesupport' => $request->libraryonlinesupport,
            ];
            $libraries = json_encode($library);
            $contact->library = $libraries;
        }

        if($request->accountsphone && $request->accountsemail){
            $validated = $request->validate([
                'accountsphone' => 'required',
                'accountsemail' => 'required',
                'accountsbank' => 'required',
            ]);
            $accounts = [
                'accountsphone' => $request->accountsphone,
                'accountsemail' => $request->accountsemail,
                'accountsbank' => $request->accountsbank,
            ];
            $accountss = json_encode($accounts);
            $contact->accounts = $accountss;
        }

        if($request->itphone && $request->itemail){
            $validated = $request->validate([
                'itphone' => 'required',
                'itemail' => 'required',
            ]);
            $it = [
                'itphone' => $request->itphone,
                'itemail' => $request->itemail,
            ];
            $its = json_encode($it);
            $contact->it = $its;
        }

        if($request->crirphone && $request->criremail){
            $validated = $request->validate([
                'crirphone' => 'required',
                'criremail' => 'required',
            ]);
            $crir = [
                'crirphone' => $request->crirphone,
                'criremail' => $request->criremail,
            ];
            $crirs = json_encode($crir);
            $contact->crir = $crirs;
        }

        if($request->locationaddress && $request->locationmap){
            $validated = $request->validate([
                'locationaddress' => 'required',
                'locationmap' => 'required',
            ]);
            $location = [
                'locationaddress' => $request->locationaddress,
                'locationmap' => $request->locationmap,
            ];
            $locations = json_encode($location);
            $contact->location = $locations;
        }

        $contact->save();
        Toastr::success('Contact Updated Successfully', 'Success');

        return back();
    }
}
