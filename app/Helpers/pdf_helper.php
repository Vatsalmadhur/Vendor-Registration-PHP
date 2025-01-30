<?php

use CodeIgniter\Images\Image;

if (!function_exists('convertPdfToImages')) {
    function convertPdfToImages($pdfPath)
    {
        $imagick = new Imagick($pdfPath);
        $imagick->setResolution(600, 600);
        $pages = $imagick->getNumberImages();
        $images = [];

        for ($i = 0; $i < $pages; $i++) {
            $imagick->setIteratorIndex($i);
            $imagick->setImageFormat('jpeg');
            $base64 = 'data:image/jpeg;base64,' . base64_encode($imagick->getImageBlob());
            $images[] = $base64;
        }

        $imagick->clear();
        $imagick->destroy();

        return $images;
    }
}
