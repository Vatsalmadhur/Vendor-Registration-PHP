<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VendorModel;
use Dompdf\Dompdf;

class PdfController extends BaseController
{
    public function index()
    {
        $data = [];
        $dompdf = new Dompdf();
        $vendorModel = new VendorModel();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $vendor = $vendorModel->find($id);
            $data['vendor'] = $vendor;

            // Convert PDF to images
            helper('pdf_helper');
            $pdfPath1 = ROOTPATH . 'public/assets/uploads/' . $vendor['police_verification_cert'];
            $pdfPath2 = ROOTPATH . 'public/assets/uploads/' . $vendor['company_grant_cert'];
            $police_cert = convertPdfToImages($pdfPath1);
            $company_cert = convertPdfToImages($pdfPath2);

            $data['police_cert_pdf'] = $police_cert;
            $data['company_cert_pdf'] = $company_cert;

        }

        $html = view('Pdf_View', $data);
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream('resume.pdf', ['Attachment' => false]);
    }
}
