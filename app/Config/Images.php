<?php

namespace Config;

use CodeIgniter\Images\Handlers\ImageMagickHandler;
use CodeIgniter\Images\Image;
use CodeIgniter\Images\ImageFactory;
use CodeIgniter\Config\BaseConfig;

class Images extends BaseConfig
{
    public $defaultHandler = ImageMagickHandler::class;

    public $handlers = [
        'gd' => \CodeIgniter\Images\Handlers\GDHandler::class,
        'imagick' => ImageMagickHandler::class,
    ];

    public function __construct()
    {
        $this->defaultHandler = getenv('IMAGE_HANDLER') ?: 'imagick';
    }
}
