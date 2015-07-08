### Observer

Observable triggers observer methods.

#### Usage

```php
class Foo extends Kelemen\Observer
{
    use Kelemen\ObserverBehavior;

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