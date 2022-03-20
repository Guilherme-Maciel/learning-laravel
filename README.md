# ROTAS
- URL Amigável no Laravel.

<b>VIEWS:</b> Páginas da aplicação que interagem com o back-end.

1. Nova página: product.blade.php
2. Definir a rota em `route > web.php`
3. Criar código:

```php
Route::get('/products', function () {
    return view('products');
});
```

# BLADE

- Template engine HTML do Laravel (permite pegar dados)
- Deixa as views dinâmicas
- Insere tags HTML e dados do banco
- Operadores lógicos disponíveis no Blade

## RETORNO DE DADOS VIA GET

- Envio feito pelo arquivo `route > web`

```php
//Retornar variáveis na página 'welcome'
//web.php
Route::get('/', function () {
    $data = "Exemplo de dado retonado via GET";
    //Retornando dados via get
    return view('welcome', ['data' => $data]);
});

```

## USANDO DADOS DINÂMICOS NO BLADE

```HTML
    <body>
        <h1>TESTANDO ENGINE BLADE</h1>
        <ul>
        @if(10 > 5)
            <li>TESTANDO IFs</li>
        @endif
        <li>{{ $data }}</li>
        <!-- O nome dos dados dinâmicos é a chave do array, e não a variável HTML-->
        </li>
    </body>
```