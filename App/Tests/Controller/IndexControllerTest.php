<?php

namespace App\Test\Controller;

use Silex\WebTestCase;
use Silex\Application;

class IndexControllerTest extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../../config.php';

        return $app;
    }

    public function testIndex()
    {
        $client = $this->createClient();

        /**
         * crawler object for select element,click on link and submit forms
         */
        $crawler = $client->request('GET', '/');

        $this->assertEquals(404,$client->getResponse()->getStatusCode());

        /**
         * select button
         */
       // $form = $crawler->selectButton('Calculate')->form();

        /**
         * set some value
         */
       //  $form['coefA'] = 1;
       //  $form['coefB'] = 10;
       // $form['coefC'] = 3;

        /**
         * submit the form
         */
       //  $crawler = $client->submit($form);

    }
}