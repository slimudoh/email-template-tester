<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

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
            $data = array(
                'userEmail' => $request->email_address,
                'userContent' => $request->email_code,
            );

            Mail::send('email', $data, function ($m) use ($data) {
                $m->from('no-reply@addqart.com', 'System');
                $m->to($data['userEmail'], 'User')->subject('Test Email!')
                    ->cc(['slimudoh@gmail.com', 'slimudoh@hotmail.com', 'slimudoh@yahoo.com']);
            });

            // } catch (\Throwable $ex) {
        } catch (Exception $ex) {
            return redirect()->back()->withErrors($ex)->withInput();
        }

        return view("success");

    }

}
