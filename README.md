BoxPackerLite
=========

BoxPackerLite is a compact PHP library for solving the "4D" bin packing/knapsack problem (3D dimensions plus weight).
Given a list of items and available box sizes, it determines how many boxes are required and how items should be
packed while respecting physical dimensions and weight limits.

This is especially useful for e-commerce and logistics workflows, such as selecting the right parcel sizes for shipping
rates or estimating the number of labels to print.

Requirements
------------
- **PHP 7.4 or higher**
- ext-json

The library is framework-agnostic and silent by default. Applications can provide their own logger implementation when
packing diagnostics are needed.

Installation
------------
```bash
composer require saminyaser/boxpackerlite
```

Features
--------
- 3D bin packing algorithm with weight constraints
- Automatic box rotation and item orientation optimization
- Support for items that must be kept flat
- Weight redistribution across multiple boxes
- Layer stability calculation
- Custom sorting strategies for boxes and items
- Optional application-provided logging
- Zero external dependencies (except ext-json)
- PHP 7.4+ typed properties and modern syntax

Logging
-------
Implement `LoggerInterface` and pass the logger to `Packer`. When omitted, the built-in `NullLogger` discards diagnostics.

```php
$packer = new Packer($logger);
```

Credit
------
This project is based on the original BoxPacker library by Doug Wright (dvdoug/boxpacker). This lite version removes
tests, docs, and logging dependencies to keep the package minimal while preserving core packing behavior.

License
-------
BoxPackerLite is MIT-licensed. 
