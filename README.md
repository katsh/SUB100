SUB100 MVC framework/skelleton
---------------

A tiny yet useful MVC framework.  
Useful for those creating a small project but don't want the full horsepower that is Zend Framework, CakePHP, CodeIgniter, etc.  

In fact, this is what I use for small projects.  
You know what they say - the best way to learn MVC patterns is to create a framework yourself.

So here it is. My tiny MVC framework.  
Comes with 3 examples - the index, contact, and error 404 pages.  

It got its name, __SUB100__, because the initial release is under 100KB. (73KB to be exact).   

Needs mod_rewrite.

The directory structure is like so:  
  
  

    katsh@netbook╺─╸[mvc]; tree .
 
    ├── app
    │   ├── controllers
    │   │   ├── baseController.php
    │   │   ├── controller.contact.php
    │   │   ├── controller.error404.php
    │   │   └── controller.index.php
    │   ├── models
    │   │   ├── baseModel.php
    │   │   ├── model.contact.php
    │   │   └── model.index.php
    │   └── views
    │       ├── view.contact.php
    │       ├── view.error404.php
    │       └── view.index.php
    ├── library
    │   └── class.validator.php
    ├── log
    ├── public
    │   ├── includes
    │   │   ├── footer.php
    │   │   ├── global.php
    │   │   ├── header.php
    │   │   └── static
    │   │       ├── images
    │   │       ├── javascript
    │   │       │   └── jquery
    │   │       └── styles
    │   │           └── default.css
    │   └── index.php
    └── README.md

13 directories, 17 files
