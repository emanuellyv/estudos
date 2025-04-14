# PHP CODE SNIFFER
- https://github.com/squizlabs/PHP_CodeSniffer
- Instalação: composer require --no-dev "squizlabs/php_codesniffer"
- Rodar: vendor/bin/phpcs --standard=PSR12 src/ -> pode escolher a PSR que quiser

# PHP PHAN
- https://github.com/phan/phan
- Instalação: composer require --no-dev "phan/phan"
- Criar arquivo config.php dentro de .phan e colocar a lista de diretórios
- Rodar: vendor/bin/phan --allow-polyfill-parser

# Definindo scripts
- Criação de scripts
```
"scripts": {
  "phpcs": "phpcs --standard=PSR12 src/",
  "phan": "phan --allow-polyfill-parser",
  "check": [
      "@phan",
      "@phpcs"
  ]
}
```
- Pós composer update: ```"post-update-cmd": "@check"```
- Descrição dos scripts
```
"scripts-descriptions": {
    "check": "Roda as verificações do código > PHAN e PHPCS"
}
```
