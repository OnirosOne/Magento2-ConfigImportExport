<?php
/**
 * Copyright © 2015 Rouven Alexander Rieker - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace Semaio\ConfigImportExport\Model\File;

/**
 * Interface FinderInterface
 *
 * @package Semaio\ConfigImportExport\Model\File
 */
interface FinderInterface
{
    /**
     * @return array
     */
    public function find();

    /**
     * @param mixed $folder
     */
    public function setFolder($folder);

    /**
     * @param mixed $baseFolder
     */
    public function setBaseFolder($baseFolder);

    /**
     * @param mixed $format
     */
    public function setFormat($format);

    /**
     * @param array $environment
     */
    public function setEnvironment($environment);
}