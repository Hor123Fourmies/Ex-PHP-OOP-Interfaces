<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 13/12/2018
 * Time: 10:31
 */

interface userInterface
{
    // Une interface peut définir des constantes, ce sont les seules valeurs pouvant être définie dans une interface

    const MAX_INSTANCES = 5;

    public function getRequest($request);

    public function parseRequest();


}