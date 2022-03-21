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
        <!-- O nome dos dados dinâmicos é a chave do array, e não a variável PHP-->
        </li>
    </body>
```

## ESTRUTURA DE REPETIÇÃO

- Enviando um array pela função get, no `web.php`:

<b>FOR:</b>

```html
    <h1>USO DE ESTRUTURA DE REPETIÇÃO FOR</h1>
        <h2>FOR</h2>
        <ul>
            @for($i = 0; $i < count($arr); $i++)
                <li>{{$arr[$i]}}</li>
            @endfor
        </ul>
```

<b>FOR EACH</b>

```html
    <h2>FOR EACH</h2>
        <ul>
            @foreach($nomes as $nome)
                <li>{{$loop->index}} - {{$nome}}</li>
            @endforeach
        </ul>
```


## EXECUTAR PHP PURO

- Possibilidade para alcançar resultados além do Blade.

```html
    <h1>UTILIZANDO PHP PURO</h1>
        @php
            $name = "Exemplo de PHP puro";
            echo $name;
        @endphp
```

## COMENTÁRIOS EM BLADE

- Não aparecem na tela do usuário como os do HTML

```
{{-- COMENTÁRIO BLADE --}}
```