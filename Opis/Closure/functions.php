<?php
/* ===========================================================================
 * Copyright (c) 2014-2018 The Opis Project
 *
 * Licensed under the MIT License
 * =========================================================================== */

namespace WebPachage\PHPUnitSandbox\Opis\Closure;

/**
 * Serialize
 *
 * @param $data
 * @return string
 */
function serialize($data)
{
    SerializableClosure::enterContext();
    SerializableClosure::wrapClosures($data);
    $data = \serialize($data);
    SerializableClosure::exitContext();
    return $data;
}

/**
 * Unserialize
 *
 * @param $data
 * @return mixed
 */
function unserialize($data)
{
    SerializableClosure::enterContext();
    $data = \unserialize($data);
    SerializableClosure::unwrapClosures($data);
    SerializableClosure::exitContext();
    return $data;
}
