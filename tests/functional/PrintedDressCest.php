<?php

use Codeception\Util\ActionSequence;

class PrintedDressCest
{

    // tests
    public function countElements(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('.button-search');
        $I->seeNumberOfElements('.product_img_link', 5);

    }
}
