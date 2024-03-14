# WP PHP
Use PHP via shortcodes in your posts and pages.

## Installation

* Clone this repository with **git clone https://github.com/andrewjcurrie/wp-php.git**
* Copy the **wp-php** folder to the **wp-content/plugins** folder of your WordPress site.
* Login to you WordPress Admin and visit the Plugins section and activate **WP PHP**.

## Usage

* From your WordPress Admin open the blog post or page in the editor that you want to use PHP on.
* Use the shortcodes **[wpphp]** as your opening PHP tag **<?php** and use the shortcode **[/wpphp] as your closing PHP tag **?>**.

## Example
To display the current year inside a WordPress blog post or page, use the following inside the code editor:
```php
[wpphp]echo date('Y');[/wpphp]
```
