<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 28/01/2017
 * Time: 17:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Exception;

class CalculBio extends Controller
{
    public function form(){
        return view('form');
    }

    public function result(Request $request){
        $name = $request->input('name');
        if($name == null){
            return view('error', ['error' => "El camp del nom no pot estar vuit."]);
        }
        if(strlen($name) == 0){
            return view('error', ['error' => "El camp del nom no pot estar vuit."]);
        }
        $birthday = $request->input('birthday');
        if($birthday == null){
            return view('error', ['error' => "El camp de l'aniversari no pot estar vuit."]);
        }
        if(strlen($birthday) == 0){
            return view('error', ['error' => "El camp de l'aniversari no pot estar vuit."]);
        }
        try{
            $dateTime = new \DateTime($birthday);
        } catch(\Exception $e){
            return view('error', ['error' => "El camp de l'aniversari es incorrecte."]);
        }
        $currentTime = new \DateTime();
        $days = $dateTime->diff($currentTime)->format('%R%a');

        if($days <= 0){
            return view('error', ['error' => "L'aniversari no pot ser posterior a la data actual."]);
        }

        $e_physical = $this->getEnergy($days, 23);
        $e_emotional = $this->getEnergy($days, 28);
        $e_intellectual = $this->getEnergy($days, 33);

        return view('result',
            [
                'name' => $name,
                'birthday' => $dateTime->format('d/m/Y'),
                'days' => $days,
                'e_physical' => $e_physical,
                'e_emotional' => $e_emotional,
                'e_intellectual' => $e_intellectual
            ]
        );
    }

    private function getEnergy($days, $cycle){
        $str = (($days%$cycle)/$cycle)*100;
        return number_format($str, 2, '.', ',');
    }
}
