<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;

/**
 * Class SetupsController
 * @package App\Controller
 */
class SetupsController extends AppController {

    /**
     * Index method
     */
    public function index() {

        # Throw a 404 when we're not in debug mode
        if ( ! Configure::read('debug')) {
            throw new NotFoundException();
        }

        $this->Toast->add('Welcome to c3i!', ['no-timeout', 'color' => 'green']);

    }

}