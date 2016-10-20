# behatStarter
##Para facilitar o uso do behat criei esse repo, como um guia inicial de utilização.

1. Como usar
  * Clone o Projeto: `git clone https://github.com/elton182/behatStarter`
2. Instale as dependências
  * Na raiz do projeto faça:  `composer install`
3. Instale o SeleniumServer
  * [Selenium Server](http://www.seleniumhq.org/download/ "Página de Download do Selenium")
4. Rode o SeliniumServer
  * `java -jar ~/Downloads/selenium-server-standalone-2.53.1.jar`
5. Baixe os drivers dos browsers
  * [PhatomJS](http://phantomjs.org/download.html)
  * [Fiferox](https://github.com/mozilla/geckodriver/releases)
  * [Chome](http://chromedriver.storage.googleapis.com/index.html)
6. Execute o teste
  * Teste com Chrome
  `behat -c behatChrome.yml -s web features\web\exemploselenium.feature`
  * Teste com Firefox
  `behat -c behatFirefox.yml -s web features\web\exemploselenium.feature`
  * Teste com PhatonJs
  `behat -c behatPhantom.yml -s web features\web\exemploselenium.feature`


#### Agradeço ao Vitor Mattos por ter me apresentado a essa ferramenta incrível na palestra do PHPSP + IMA ####
* [Vitor Mattos](https://github.com/vitormattos/palestra-behat)
* [Link da palestra](https://github.com/vitormattos/palestra-behat)
