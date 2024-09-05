<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeGenerateController extends Controller
{
    //
    public function qrcode()
    {
        // {
        //     $data = QrCode::size(512)
        //         ->format('png')
        //         ->merge('/public/images/logo.png')
        //         ->errorCorrection('Q')
        //         ->generate(
        //             'https://siddiq.luxima.id',
        //         );
    
        //     return response($data)
        //         ->header('Content-type', 'image/png');
        // }


        $qrCodes = [];
        $qrCodes['simple'] = 
        QrCode::size(150)->generate('https://siddiq.luxima.id');
        $qrCodes['changeColor'] = 
        QrCode::size(150)->color(255, 0, 0)->generate('https://siddiq.luxima.id');
        $qrCodes['changeBgColor'] = 
        QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://siddiq.luxima.id');
        $qrCodes['styleDot'] = 
        QrCode::size(150)->style('dot')->generate('https://siddiq.luxima.id');
        $qrCodes['styleSquare'] = QrCode::size(150)->style('square')->generate('https://siddiq.luxima.id');
        $qrCodes['styleRound'] = QrCode::size(150)->style('round')->generate('https://siddiq.luxima.id');

        return view('qrcode',$qrCodes);

        
    }

    public function qrcodetext($text)
    {
        return QrCode::size(300)->generate($text);
    }

    public function qrcodeimage($link)
    {
        return QrCode::size(300)->format('png')->generate($link);
    }
    public function qrcodesvg($link)
    {
        return QrCode::size(300)->format('svg')->generate($link);
    }

    public function qrcodepdf($link)
    {
        return QrCode::size(300)->format('pdf')->generate($link);
    }

    public function qrcodemail($email)
    {
        return QrCode::size(300)->email($email);
    }

    public function qrcodeurl($url)
    {
        return QrCode::size(300)->url($url);
    }

    public function qrcodesms($number, $message)
    {
        return QrCode::size(300)->sms($number, $message);
    }

    public function qrcodeotp($otp)
    {
        return QrCode::size(300)->otp($otp);
    }

    public function qrcodewifi($ssid, $password, $encryption)
    {
        return QrCode::size(300)->wifi($ssid, $password, $encryption);
    }

    public function qrcodedata($data)
    {
        return QrCode::size(300)->data($data);
    }

    public function qrcodegeo($latitude, $longitude)
    {
        return QrCode::size(300)->geo($latitude, $longitude);
    }

    
    

}
