<?php

namespace App\Controllers;
use App\Models\VendorModel;

class Dashboard extends BaseController
{
	public function index(): string
	{
        $vendorModel = new VendorModel();
        $data['vendors']= $vendorModel->findAll();
		return view('dashboard_view',$data);
	}


}
