# Array OrderBy

A PHP function to order a multi-dimensional array.

## Install

Normall install via Composer.

## Usage

I took this code from the [PHP docs](http://php.net/manual/en/function.array-multisort.php#91638).  It works great.

```php
$stuff = array(
    array('id'=>1,'name'=>'aA','cat'=>'cc'),
    array('id'=>2,'name'=>'aa','cat'=>'dd'),
    array('id'=>3,'name'=>'bb','cat'=>'cc'),
    array('id'=>4,'name'=>'bb','cat'=>'dd')
);

$results = array_orderby($stuff, array('name'=>SORT_DESC, 'cat'=>SORT_ASC));
```
