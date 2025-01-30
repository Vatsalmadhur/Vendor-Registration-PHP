<?php

namespace App\Controllers;
use App\Models\CompanyModel;

class Company extends BaseController
{
	public function index(): string
	{
		return view('company_view');
	}

	public function save(){
        $companyModel=new CompanyModel();
        $data=[
            'company_name'=>$this->request->getPost('company_name')
        ];
        $companyModel->save($data);
    }
}
