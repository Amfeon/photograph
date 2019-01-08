<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail;

class MailController extends Controller
{
    public function store(Request $request)
    {
        if((preg_match("~[а-яА-ЯёЁa-zA-Z]{3,12}~", $request->name))&&(preg_match("~^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$~", $request->phone))){
            $mail=new Mail();
            $mail->create($request);
            return "Спасибо, ваша заявка отправлена.";
        }else{
            return "Неправильно введены даные";
        }
    }
    public function getMails(){
        $mail=new Mail();
        $data= $mail->getMail();
        return view('back-end.show-applications',['data' => $data]);
    }
}
