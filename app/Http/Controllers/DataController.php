<?php

namespace App\Http\Controllers;

use App\Models\Sparql;

class DataController extends Controller
{

    function search($search)
    {
        $sparql = new Sparql();

        $phoneID = $sparql->getSmartphone('phoneID', $search);
        $phoneName = $sparql->getSmartphone('phoneName', $search);
        $phoneBrand = $sparql->getSmartphone('phoneBrand', $search);
        $batteryCapacity = $sparql->getSmartphone('batteryCapacity', $search);
        $chipset = $sparql->getSmartphone('chipset', $search);
        $price = $sparql->getSmartphone('price', $search);
        $weight = $sparql->getSmartphone('weight', $search);
        $operatingSystem = $sparql->getSmartphone('operatingSystem', $search);
        $RAM = $sparql->getSmartphone('RAM', $search);
        $memoryCapacity = $sparql->getSmartphone('memoryCapacity', $search);
        $diagonalWidth = $sparql->getSmartphone('diagonalWidth', $search);
        $camera = $sparql->getSmartphone('camera', $search);

        return compact('phoneID', 'phoneName', 'phoneBrand', 'batteryCapacity', 'chipset', 'price', 'weight', 'operatingSystem', 'RAM', 'memoryCapacity', 'diagonalWidth', 'camera');
    }

    function getAllSmartphone()
    {
        $sparql = new Sparql();
        return $sparql->getSmartphone('all');
    }

    function getSmartphone($id)
    {
        $sparql = new Sparql();
        return $sparql->getSmartphone('phoneID', $id);
    }

    function getAllSmartphoneAndSortPrice()
    {
        $sparql = new Sparql();
        return $sparql->getSmartphone('allAndSortPrice');
    }

    function getAllSmartphoneAndSortBattery()
    {
        $sparql = new Sparql();
        return $sparql->getSmartphone('allAndSortBattery');
    }
}
