<?php

namespace Clarity\CdnBundle\Cdn\Common;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @author nikita prokurat <nickpro@tut.by>
 * @author Zmicier Aliakseyeu <z.aliakseyeu@gmail.com>
 */
interface ObjectInterface 
{
    /**
     * @return string
     */
    public function getUri();

    /**
     * @return string
     */
    public function getHttpUri();

    /**
     * @return string
     */
    public function getPath();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getExtension();
    
    /**
     * @return boolean 
     */
    public function remove();
}
