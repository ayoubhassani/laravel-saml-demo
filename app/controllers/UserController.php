<?php
/**
 * Created by PhpStorm.
 * User: Khanh
 * Date: 9/6/2015
 * Time: 1:53 PM
 */

class UserController extends BaseController {


    protected $layout = 'master';

    public function profile()
    {
        return $this->layout->nest('content', 'user.profile');
    }

} 