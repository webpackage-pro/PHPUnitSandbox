<?php
/* ===========================================================================
 * Copyright (c) 2014-2018 The Opis Project
 *
 * Licensed under the MIT License
 * =========================================================================== */

namespace WebPackage\PHPUnitSandbox\Opis\Closure;


/**
 * Helper class used to indicate a reference to an object
 */
class SelfReference
{
    /**
     * @var string An unique hash representing the object
     */
    public $hash;

    /**
     * Constructor
     *
     * @param string $hash
     */
    public function __construct($hash)
    {
        $this->hash = $hash;
    }
}