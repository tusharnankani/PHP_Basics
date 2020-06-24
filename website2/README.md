## *$_SERVER*
* the directory: `website2` is made for using `$_SERVER`, in reference to: [$_SERVER Superglobal](https://github.com/tusharnankani/PHP_Basics/blob/master/7.%20%24_SERVER%20Superglobal.php);

* `$_SERVER` is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server.

### index.php
*code can be viewed [here.](https://github.com/tusharnankani/PHP_Basics/blob/master/website2/index.php)*

![index](https://user-images.githubusercontent.com/61280281/85629458-8d92ad00-b68f-11ea-86d4-a9f0d2636137.png)

## NOTE:
1. All elements of the `$_SERVER` array whose keys begin with 'HTTP_' come from HTTP request headers and are not to be trusted.

2. All HTTP headers sent to the script are made available through the `$_SERVER` array, with names prefixed by 'HTTP_'.

3. `$_SERVER['PHP_SELF']` is dangerous if misused. If login.php/nearly_arbitrary_string is requested, `$_SERVER['PHP_SELF']` will contain not just login.php, but the entire login.php/nearly_arbitrary_string. If you've printed `$_SERVER['PHP_SELF']` as the value of the action attribute of your form tag without performing HTML encoding, an attacker can perform XSS attacks by offering users a link to your site such as this:

`<a href='http://www.example.com/login.php/"><script type="text/javascript">...</script><span a="'>Example.com</a>`

* The javascript block would define an event handler function and bind it to the form's submit event. This event handler would load via an <img> tag an external file, with the submitted username and password as parameters.

* Use `$_SERVER['SCRIPT_NAME']` instead of `$_SERVER['PHP_SELF']`. HTML encode every string sent to the browser that should not be interpreted as HTML, unless you are absolutely certain that it cannot contain anything that the browser can interpret as HTML.






### *REFERENCE*
- [Official Documentation](https://www.php.net/manual/en/reserved.variables.server.php)



