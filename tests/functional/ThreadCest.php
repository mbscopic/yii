<?php

class ThreadCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage(['thread/index']);
    }

    // tests
    public function openThreadPage(FunctionalTester $I)
    {
        $I->see('Threads', 'h1');
    }


}
