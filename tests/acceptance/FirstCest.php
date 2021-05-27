<?php

use Codeception\Util\ActionSequence;

class QuickViewCest
{

    // Тест на проверку работы модального окна при нажатии на Quick View
    public function quickViewTitle(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->seeElement('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->switchToIFrame('.fancybox-iframe');
        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
