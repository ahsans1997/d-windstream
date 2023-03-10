<?php

use App\Models\Country;
use App\Models\Setting;

function default_header_banner($page_name = '')
{

    // if(request()->route()->getname() == 'department' && settings()->departmentbanner){
    //     return asset('/').'assets/images/banner/'.settings()->departmentbanner;
    // }

    switch (request()->route()->getname()) {
        case 'department':
            return setting()->getFirstMediaUrl('departmentbanner');
            break;
        case 'program':
            return setting()->getFirstMediaUrl('programbanner');
            break;
        case 'news':
            return setting()->getFirstMediaUrl('newsbanner');
            break;
        case 'event':
            return setting()->getFirstMediaUrl('eventbanner');
            break;
        case 'research':
            return setting()->getFirstMediaUrl('researchbanner');
            break;
        case 'about':
            return setting()->getFirstMediaUrl('aboutbanner');
            break;
        case 'contact':
            return setting()->getFirstMediaUrl('contactbanner');
            break;
        case 'faculty-member':
            return setting()->getFirstMediaUrl('facultymemberbanner');
            break;
        default:
            return setting()->getFirstMediaUrl('defaultbanner');
            break;
    }

    return setting()->getFirstMediaUrl('defaultbanner');
}

function usefullLinks(){

    // return view('usefullLinks',$data);
    $data =  '<ul>';
    $data .= '<li><a href="'.route('home').'"><i class="fas fa-square"></i> Home</a></li>';
    $data .= '</ul>';
    return $data;
}


function country($id = null)
{
    if ($id) {
        return Country::find($id);
    } else {
        return Country::orderBy('name', 'asc')->get();
    }
}

function setting()
{
    return Setting::first();
}

function numberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '', trim($num));
    if (!$num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array(
        '', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array(
        '', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ($tens < 20) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . (($levels && (int) ($num_levels[$i])) ? ' ' . $list3[$levels] . ' ' : '');
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}

function portallink()
{
    $data = Setting::latest()->first();
    $portal = json_decode($data->portal);
    return $portal;
}
