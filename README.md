## Dokumentacja - Attrybut PHP 8.3

### Opis

Ten pakiet zawiera Attrybut od PHP 8.0 #[Required]

Służy on do walidacji. Za pomocą refleksji wartość z przypisanym odpowiednim attrybutem walidowana a następnie odpowiednio obsługiwana.

### Sposób użycia

```
use App\Validation\Rule\Required;

readonly class Product
{
    public function __construct(
        #[Required] public readonly string $erpId,
        #[Required] public readonly string $name,
        #[Required] public readonly int $stock
    ) {
    }
}
```
