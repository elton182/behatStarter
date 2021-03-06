<?php
use Behat\MinkExtension\Context\MinkContext;
use Behat\Mink\Exception\ElementNotFoundException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
class WebContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Presses xpath
     * @When /^(?:|Eu )clico no xpath "(?P<xpath>(?:[^"]|\\")*)"$/
     */
    public function clickXPath($xpath)
    {
        $xpath = $this->fixStepArgument($xpath);
        $element = $this->getSession()->getPage()->find(
            'xpath',
            $xpath
        );
        if (null === $element) {
            throw new ElementNotFoundException(
                $this->getSession(), 'xpath', null, $xpath
            );
        }
        $element->press();
    }
    /**
     * @Given /^Eu devo aguardar (\d+) segundos ou pelo javascript "([^"]*)"$/
     */
    public function euDevoAguardarSegundos($segundos, $javascript)
    {
        $this->getSession()->wait($segundos * 1000, $javascript);
    }
}
