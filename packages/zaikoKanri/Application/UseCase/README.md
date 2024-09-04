実行

```php
//tinker
use ZaikoKanri\Application\UseCase\House\Create\Interactor
use ZaikoKanri\Application\UseCase\House\Create\Input
app(Interactor::class)->execute(new Input('build', 12))
```
