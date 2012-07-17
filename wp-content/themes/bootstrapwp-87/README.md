Bootstrapwp - TWITTER BOOTSTRAP for WordPress
=================

Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

Download the most-up-to-date theme files: [Download .zip file](https://github.com/downloads/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/bootstrapwp-87.zip)
Follow the development: [WIP Branch on Github](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/1-WIP)

Demo
----
You can view a demo of this WordPress theme running the latest development branch code at: [http://bootstrapwp.rachelbaker.me/](http://bootstrapwp.rachelbaker.me/)

View the theme style guide at: [http://bootstrapwp.rachelbaker.me/style-guide/](http://bootstrapwp.rachelbaker.me/style-guide/)

View the javascript guide at: [http://bootstrapwp.rachelbaker.me/javascript-guide/](http://bootstrapwp.rachelbaker.me/javascript-guide/)


Usage
-----

Download the BootstrapWP theme, and install to your WordPress site.

This is meant to be a base theme for WordPress custom theme development.  A knowledge of WordPress theme development practices as well as understanding of HTML, CSS/LESS, jQuery and PHP are required.

**Important!** To safely retain the ability to update the less files with future versions of Bootstrap or BootstrapWP, add all custom edits/changes inside the `less/bswp-custom.less` file.
  

Getting Started
-------

Create a page that uses the template `Hero Homepage Template`, then under `Settings->Reading`  set your site to use a static front page selecting your new page.  Add content to the three "Home" widget areas under `Appearances->Widgets`.

Create a menu under `Appearances->Menus` and assign it be your site's Main Menu.



Bug tracker
-----------

**Report theme bugs** [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues)


##v.87 of BootstrapWP - Released June 4, 2012

**Release Highlights:**

1. Switched to using the Less files instead of CSS
2. Improved navigation submenu dropdown implementation with custom Walker
3. Updated styles and scripts to Bootstrap 2.04 release
4. Switched to using bootstrap.js file instead of the separate .js files


###Full Changelog
__Functions.php__

*	Edited `bootstrapwp_css_loader()` function to use new `/less/bootstrapwp.css` generated from Less file compilation and removed references to previously used css files
*	Edited `bootstrapwp_js_loader()` function to include minified and minified bootstrap.min.js file
*	Edited `bootstrapwp_js_loader()` function to include `/js/bootstrapwp.demo.js` file containing all the extra JavaScript needed to enable the functionality of demos
*	Added new walker `Bootstrap_Walker_Nav_Menu` class to assign "dropdown-menu" class to navigation sub-menus

__Style.css__

*	Removed content because it this file is not loaded via `bootstrapwp_css_loader()` 
*	Added note to add custom updates to the less/bswp-custom.less file to safely retain the ability to update the less files with future versions of Bootstrap or BootstrapWP
*	Bumped version to .87

__Header.php__

*	Edited `wp_nav_menu()` call array to add `walker => new bootstrapwp_walker_nav_menu()` parameter
*	Removed extraneous commented line from `wp_nav_menu()` function call

__Footer.php__

*	Removed all Javascript and moved to new `js/bootstrapwp.demo.js` file

__Page-home.php__

*	Created file to be static homepage template that loads 3 widget areas (previously was index.php)

__Index.php__

*	Edited file to be standard blog homepage - and moved previous template content to new `page-home.php` file

__JS Folder__

*	Removed the individual .js files and replaced with single compiled `bootstrap.min.js` file
*   Added `bootstrap.js` (pre-minified version of bootstrap.min.js) file for reference
*   Added `bootstrapwp.demo.js` file which houses code is used to power all the JavaScript demos and examples for BootstrapWP
*   Added folder for google-code-prettify js and css files to style reference and documentation template files.

__CSS Folder__

*	Removed folder entirely because main style file is compiled less file located at `less/bootstrapwp.css`

__LESS Folder__

*	Updated LESS files from Twitter Bootstrap 2.04 branch
* 	Added `bswp-docs.less` file to pull in styles to allow doc pages to format correctly
*	Added note to use `bswp-custom.less` file for any custom additions to allow for easy updating of styles.
*	Added style fix for top positioning of scrollspy submenu to `less/bswp-overrides.less`

__IMG Folder__

*   Updated glyph icons with new set included in Bootstrap 2.04  


Copyright and license
---------------------

This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.


Thanks to the Original Twitter Bootstrap Authors
-----------------------

**Mark Otto**

+ http://twitter.com/mdo
+ http://github.com/markdotto

**Jacob Thornton**

+ http://twitter.com/fat
+ http://github.com/fat


