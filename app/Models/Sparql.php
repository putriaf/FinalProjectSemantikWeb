<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

require_once realpath(__DIR__ . '/..') . "../../vendor/autoload.php";
require_once realpath(__DIR__ . '/..') . "../Http/html_tag_helper.php";


\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
\EasyRdf\RdfNamespace::set('d', 'http://phonology.com/ns/data#');
\EasyRdf\RdfNamespace::set('i', 'http://phonology.com/ns/info#');

class Sparql extends Model
{
    use HasFactory;

    function getSmartphone($type = 'all', $search = '')
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/smartphone');

        $phoneID = '';
        $phoneName = '';
        $phoneBrand = '';
        $batteryCapacity = '';
        $chipset = '';
        $price = '';
        $weight = '';
        $operatingSystem = '';
        $RAM = '';
        $memoryCapacity = '';
        $diagonalWidth = '';
        $camera = '';

        if ($type == 'phoneID') {
            $phoneID = $search;
        } else if ($type == 'phoneName') {
            $phoneName = $search;
        } else if ($type == 'phoneBrand') {
            $phoneBrand = $search;
        } else if ($type == 'batteryCapacity') {
            $batteryCapacity = $search;
        } else if ($type == 'chipset') {
            $chipset = $search;
        } else if ($type == 'price') {
            $price = $search;
        } else if ($type == 'weight') {
            $weight = $search;
        } else if ($type == 'operatingSystem') {
            $operatingSystem = $search;
        } else if ($type == 'RAM') {
            $RAM = $search;
        } else if ($type == 'memoryCapacity') {
            $memoryCapacity = $search;
        } else if ($type == 'diagonalWidth') {
            $diagonalWidth = $search;
        } else if ($type == 'camera') {
            $camera = $search;
        } else if ($type == 'all') {
            $search = '';
        } else {
            return "Unknown type";
        }

        $result = $sparql->query(
            "
            PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            PREFIX d: <http://phonology.com/ns/data#>
            PREFIX i: <http://phonology.com/ns/info#>

            SELECT ?phoneID ?phoneName ?phoneBrand ?batteryCapacity ?chipset ?price ?weight ?operatingSystem ?RAM ?memoryCapacity ?diagonalWidth ?camera
            WHERE
            { 
            ?phone  i:phoneID ?phoneID ;
                    i:phoneName ?phoneName;
                    i:phoneBrand ?phoneBrand;
                    i:batteryCapacity ?batteryCapacity;
                    i:chipset ?chipset;
                    i:price ?price;
                    i:weight ?weight;
                    i:operatingSystem ?operatingSystem;
                    i:RAM ?RAM;
                    i:memoryCapacity ?memoryCapacity;
                    i:diagonalWidth ?diagonalWidth;
                    i:camera ?camera.
            FILTER regex (?phoneID, \"{$phoneID}\", \"i\")
            FILTER regex (?phoneName, \"{$phoneName}\", \"i\")
            FILTER regex (?phoneBrand, \"{$phoneBrand}\", \"i\")
            FILTER regex (?batteryCapacity, \"{$batteryCapacity}\", \"i\")
            FILTER regex (?chipset, \"{$chipset}\", \"i\")
            FILTER regex (?price, \"{$price}\", \"i\")
            FILTER regex (?weight, \"{$weight}\", \"i\")
            FILTER regex (?operatingSystem, \"{$operatingSystem}\", \"i\")
            FILTER regex (?RAM, \"{$RAM}\", \"i\")
            FILTER regex (?memoryCapacity, \"{$memoryCapacity}\", \"i\")
            FILTER regex (?diagonalWidth, \"{$diagonalWidth}\", \"i\")
            FILTER regex (?camera, \"{$camera}\", \"i\")
            }
            "
        );
        return $result;
    }
}
