# pipeline
Laboratório de testes, pipeline

O no 'Pipeline Pattern' é como uma linha de montagem, que pega um objeto, modifica e passa para a próxima classe.

```php
$pipeline = (new Pipeline)
    ->pipe(new createOrder)
    ->pipe(new processPayment)
    ->pipe(new sendInvoice)
    ->pipe(new exportOrder);
$pipeline->process($order);
```
Qual a legibilidade disso?