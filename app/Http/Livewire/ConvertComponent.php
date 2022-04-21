<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class ConvertComponent extends Component
{
    public string $input = "";
    public string $output = "";

    public int $mode = 0;

    public function render()
    {
        return view('livewire.convert-component')
            ->layout('layouts/layout');
    }

    public function clear()
    {
        $this->input = "";
        $this->output = "";
        $this->mode = 0;
    }

    public function convert()
    {
        $this->output = $this->translate($this->mode, $this->umlaute($this->removeNonChars($this->input)));
        $this->input = "";
    }

    public function removeNonChars($string) : string
    {
        // Alles, was keine buchstaben oder spaces sind, ersetzen
        $regex = "/[^\w\s]/";
        $string = preg_filter($regex, ' ', $string) ?? $string;
        // mehrfachspaces durch einfache ersetzen
        return preg_filter("/\s+/", ' ', $string) ?? $string;
    }

    public function umlaute($string)
    {
        $lower = Str::upper($string);
        $lower = str_replace('AE', 'Ä', $lower);
        $lower = str_replace('OE', 'Ö', $lower);
        $lower = str_replace('UE', 'Ü', $lower);
        $lower = str_replace('ß', 'S', $lower);
        return $lower;
    }

    public function translate($mode, $input)
    {
        $dbTable = "";
        switch($mode)
        {
            case 0:
                $dbTable = 'latin_to_votox';
                //sprachspezifische anpassungen:
                $input = str_replace('AE', 'E', $input);
                $input = str_replace('QU', 'Q', $input);
                break;

            case 1:
                $dbTable = 'german_to_votox';
                //sprachspezifische anpassungen:
                $input = str_replace('AE', 'Ä', $input);
                $input = str_replace('OE', 'Ö', $input);
                $input = str_replace('UE', 'Ü', $input);
                $input = str_replace('ß', 'S', $input);
                $input = str_replace('ST', 'SCHT', $input);
                $input = str_replace('SCH', '1', $input);
                $input = str_replace('EU', '2', $input);
                $input = str_replace('IE', '3', $input);
                $input = str_replace('EI', '4', $input);
                $input = str_replace('EU', 'OI', $input);
                $input = str_replace('IE', 'I', $input);
                $input = str_replace('CK', 'K', $input);
                $input = str_replace('ÄU', 'OI', $input);
                $input = str_replace('OI', '2', $input);
                $input = str_replace('Ö', '5', $input);
                $input = str_replace('Y', 'I', $input);
                $input = str_replace('Ü', '6', $input);
                $input = str_replace('ICH', 'I1', $input);
                $input = str_replace('AUCH', 'AU7', $input);
                $input = str_replace('ch', '7', $input); // ?! das macht keinen Sinn ....
                $input = str_replace('MM', 'M', $input);
                $input = str_replace('NN', 'N', $input);
                $input = str_replace('LL', 'L', $input);
                $input = str_replace('TT', 'T', $input);
                break;
        }

        $entries = new Collection(DB::select("SELECT * FROM $dbTable"));

        $output = '';

        foreach(str_split($input) as $char)
        {
            $output .= $entries->first(function ($value, $key) use ($char) {
                return $value->source == $char;
            }, json_decode(json_encode(['votox' => ' '])))->votox;
        }
        return $output;
    }
}
