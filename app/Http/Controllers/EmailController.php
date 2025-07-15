<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function success()
    {
        return view("success");
    }

    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email_address" => "required|string",
            "email_code" => "required|string",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $emailList = explode(',', $request->email_address);

            $emailValidation = '/^\\S+@\\S+\\.\\S+$/';
            foreach ($emailList as $email) {
                if (preg_match($emailValidation, $email) == 1) {
                    $data = array(
                        'email' => $email,
                        'userContent' => $request->email_code,
                    );

                    SendMailJob::dispatch($data);
                }
            }

        } catch (\Throwable$ex) {
        } catch (Exception $ex) {
            return redirect()->back()->withErrors($ex)->withInput();
        }

        return view("success");

    }

}
