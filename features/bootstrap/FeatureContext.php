<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

     /**
     * @Given estou na p├ígina de entrada
     */
    public function estouNaPaginaDeEntrada()
    {
        throw new PendingException();
    }

    public function estouNaPaginaDeEntrada2()
    {
        throw new PendingException();
    }

    /**
     * @Given preencho :arg1 com :arg2
     */
    public function preenchoCom($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given pressiono :arg1
     */
    public function pressiono($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then devo ver :arg1
     */
    public function devoVer($arg1)
    {
        throw new PendingException();
    }
}
