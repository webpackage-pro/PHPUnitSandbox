<?php
/* ===========================================================================
 * Copyright (c) 2014-2018 The Opis Project
 *
 * Licensed under the MIT License
 * =========================================================================== */

namespace WebPackage\PHPUnitSandbox\Opis\Closure;

interface ISecurityProvider
{
    /**
     * Sign serialized closure
     * @param string $closure
     * @return array
     */
    public function sign($closure);

    /**
     * Verify signature
     * @param array $data
     * @return bool
     */
    public function verify(array $data);
}