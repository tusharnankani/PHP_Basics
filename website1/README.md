## `Include` and `Require`:
* the directory: website1 is made for using functions like `include` and `require`, in reference to: [IncludeAndRequire.php](https://github.com/tusharnankani/PHP_Basics/blob/master/6.%20IncludeAndRequire.php);

    * header and footer are same throughout; we put it in the [`inc`](https://github.com/tusharnankani/PHP_Basics/tree/master/website1/inc) directory;
    * we can use `include` for that!
    * we can use `require`, `require_once` etc;

* The main **difference** between include an require is that if we use *`include inc/header1.php`*; and even if header1.php isn't present the script keeps running and prints the rest of it, i.e it keeps going!
* Whereas, if we use require, the script will stop working, and won't execute the rest of the program.
