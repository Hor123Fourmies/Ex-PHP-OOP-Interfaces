<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 13/12/2018
 * Time: 11:18
 */

require('interfaces/user.interface.php');

class user implements userInterface
{

    private $request;

    public function __construct()
    {
        $this->getRequest($_REQUEST);
    }




}