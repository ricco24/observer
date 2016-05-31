### Observer

#### Usage

```php
class Foo extends Kelemen\Observer
{
    use Kelemen\ObserverBehavior;

    public function __construct($bar)
    {
        $bar->attach($this);
    }

    public function someFunction()
    {
        // process
    }
}

class Bar extends Kelemen\Observable
{
    use Kelemen\ObservableBehavior;

    public function __construct()
    {
        $this->setState('someFunction')
    }
}
```
