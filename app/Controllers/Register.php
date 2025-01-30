<?php

namespace App\Controllers;
use App\Models\VendorModel;
use App\Models\CompanyModel;
class Register extends BaseController
{
	public function index(): string
	{
        $companyModel= new CompanyModel();
        $data['companies']=$companyModel->findAll();
		return view('register_view',$data);
	}

	public function save(){
        $vendorModel=new VendorModel();

        $photoName="";
        $photo = $this->request->getFile('photo');
        if ($photo->isValid() && !$photo->hasMoved()) {
            $photoName = $photo->getRandomName();
            $photo->move(ROOTPATH . '/public/assets/uploads', $photoName);

        }

        $policeCertName = '';
        $policeVerificationCert = $this->request->getFile('police_verification_cert');
        if ($policeVerificationCert->isValid() && !$policeVerificationCert->hasMoved()) {
            $policeCertName = $policeVerificationCert->getRandomName();
            $policeVerificationCert->move(ROOTPATH . '/public/assets/uploads', $policeCertName);
        }

        $companyCertName ="";
        $companyGrantCert = $this->request->getFile('company_grant_cert');
        if ($companyGrantCert->isValid() && !$companyGrantCert->hasMoved()) {
            $companyCertName = $companyGrantCert->getRandomName();
            $companyGrantCert->move(ROOTPATH . '/public/assets/uploads', $companyCertName);
        }

        // Collect data from the form
        $data = [
            'name' => $this->request->getPost('name'),
            'dob' => $this->request->getPost('dob'),
            'phone_number' => $this->request->getPost('phone_number'),
            'email' => $this->request->getPost('email'),
            'father_name' => $this->request->getPost('father_name'),
            'date_from' => $this->request->getPost('date_from'),
            'date_to' => $this->request->getPost('date_to'),
            'company_name' => $this->request->getPost('company_name'),
            'directorate' => $this->request->getPost('directorate'),
            'police_verification_cert' => $policeCertName,
            'company_grant_cert' => $companyCertName,
            'photo' => $photoName,
        ];


		$vendorModel->save($data);
		return redirect()->to('/register');
	}
}
