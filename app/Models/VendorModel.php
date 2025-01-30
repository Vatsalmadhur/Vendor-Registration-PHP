<?php
namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $table = 'vendors'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','dob', 'phone_number', 'email','father_name','date_from','date_to','company_name','directorate','police_verification_cert','company_grant_cert','photo'];
}
