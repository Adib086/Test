<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function acService()
{
    return view('Acservice');
}

public function tvService()
{
    return view('Tvservice');
}

public function WaterPurifier()
{
    return view('waterpurifier');
}

public function carpenterService()
{
    return view('Carpenterservice');
}

public function electricianService()
{
    return view('ElectricianService');
}
public function PlumberService()
{
    return view('Plumberservice');
}
public function inverterandBatteryservice()
{
    return view('Inverterandbatteryservice');
}
public function Car_repairingService()
{
    return view('Car_repairingservice');
}
public function CCTV_CameraService()
{
    return view('CCTV_CameraService');
}
public function CleaningService()
{
    return view('CleaningService');
}
public function InteriorDesign()
{
    return view('InteriorDesign');
}
public function WeldingService()
{
    return view('WeldingService');
}
public function Post()
{
    return view('post');
}


}

