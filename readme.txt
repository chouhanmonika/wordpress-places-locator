=== GEO my Wordpress ===
Contributors: Ninjew
Donate link: http://geomywp.com/
Tags: zipcode,radius,search,posts,address,distance,google,map,directions,locations
Requires at least: 3.3
Tested up to: 3.5
Stable tag: 1.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Using Google's API tools GEO my WP provides an advance proximity search for any post type or buddypress's members based on a given address and radius.

== Description ==

GEO my WP is the continuous version of the plugin WordPress Places Locator. Now , with the integration of Buddypress the plugin is no longer search for places only but also for members.
Using google API tool GEO my WP let you add location to any of your post types, pages or Buddypress members. After adding your locations you can create an advance search form including radius values, units (miles and kilometers) and custom taxonomies for post types or profile fields for Buddypress. Results will be displayed based on the address entered and the chosen radius ordered by the distance.
Together with other great features like auto locating user's current location, displaying driving distance, "get directions" link, google map with markers of the location and much more, GEO my WP just might be the coolest GEO tool for WordPress.

<div style="font-size:16px;"><strong>PLease Download GEO my WP plugin from <a href="http://wordpress.org/extend/plugins/geo-my-wp/"> here</a>.</strong></div>

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. In admin 'Settings' go to 'Places Locator'.
4. Choose the post types where you want the address fields to appear. Only posts with valid address will be added to the database.
5. Build a search form using the shortcode builder.
6. Copy and paste the shortcode into any page.

== Frequently Asked Questions ==

1. for any questions, error report and suggestions please email info@geomywp.com or visit http://www.geomywp.com

== Changelog ==

== 1.7 ==
* This is a major update - most of the core code has improved for better performance, security issues and many bug fix.
* Works with Wordpress 3.5. 
* SQL queries are now more secure and were modified for better performance.
* "User Current location" widget/shortcode were improved - better looking and better performance. Few bugs were fixed as well.
* Locator and cookies were improved and now working better when trying to locate a user and when saving the information via cookies. Modified to work better with different languages and fixed issues with special characters.
* buddypress - "location" tab modified - looking better and easier to work with.
* Geocode function improved when geocoding and saving information via database.
* fix issues when using Wordpress multisite - now can be use when multisite activated and fixed issue were address field will not show in the New/Edit post page.
* Now can choose the locator icon for each search form in the shortcode settings. 
* "member's location widget" - Improved and bug fixes.
* backend - visually improved.
* widgets names were changed from WPPL to GMW.
* Javascript/jQuery - improved in the backend and the front end.
* Files and folders better organized.
* Map, markers and info windows - visually improved as well as performance.

== 1.6.1 ==
* Fixed bug with Buddypress's "Location" tab styling

== 1.6 ==

* Bug fix - Fixed locator icon being displayed even when checkbox is unchecked 
* Bug fix - Fixed Buddypress's issue where profile fields would not display in the search form.
* Bug fix - Loading icon hold and location would not update for user enter his location in the location tab
* Bug fix - Buddypress's search result display deleted user.

== 1.5.2 ==

* Bugs fix.
* Memory issues.
* New shortcode to display Buddypress member's location anywhere within a template page.
* New widget to display Buddypress member's location in the sidebar

== 1.5.1 ==

* Fix issue with "User location" shortcode/widget not getting the right location.
* Fix "undefined function" error when "Friends Connection" component (buddypress settings) is unchecked.
* Fix avater width/height in shortcode issue.


== 1.5 ==

* initial release of GEO my WP - the upgraded version of wordpress places locator
* Improvement of the backend.
* Now works with Buddypress. let members add their location and look for other members near them.
* Theme color.
* Turn on/off auto locator.
* Now you can add your own locator icon.
* Much cleaner styling.
* Various bug fix.
* Code improvement.
* Better performance.
* Various new settings


== 1.3 ==

* Works with wordpress 3.4.1
* Back end improvement - 5 options to choose from when adding a location.
* back end - improved code and performance.
* Autolocator feature - finds user's current location.
* User's location widget and shortcode to display user's current location.
* Choose between miles, kilometer or both when creating search form shortcode.
* To display results - Choose between Post only, map only or both when creating search form shortcode.
* Use your Google API key.
* Enter your region.
* Enter number of words for excerpt.
* Choose icon for autolocator.
* Single location map - now display additional information below the map and info window on marker click.
* Much cleaner code for better performance.
* New results styling.
* Thickbox effect on feaure image click in results.

= 1.2.7 =

* bug fix - pagination will not work when updating to wordpress 3.4
* bug fix - posts that have two categories from the same taxonomy assined to it will not show in search results. 
* bug fix - fix problem where search form will always show in the top of the page.
* CSS fix
* code improvement - better code for filtering taxonomies.
* Added Feature - Now you can use Latitude / longitude insted of address when creating/updating a post
* Added Feature - If no address entered in the input field the plugin will display all posts ordered by the title.

= 1.2.6 =

* Bug fix - Form id value is not being saved and doesn't show in widget when first creating a shortcode
* Bug fix - widget redirect to main site when plugin installed in subsite.


= 1.2.5 =
* Code improvement.
* Widget - display a search form in the sidebar.
* Option added - Auto zoom level. will fit all markers on map.
* option added - custom Zoom level (when not auto zoom).

= 1.2.1 =
* Bug fix where new meta boxes were not updating correctly.
* pagination display improved.

= 1.2 =
* Multisite bug fix - now works for each blog on WP Multisite.
* Two styling added to choose from "default" and "blue" for each shortcodeand. more to come.
* Styling for Google maps' info window.
* Meta boxes added - phone, fax, email address, website address.
* shortcode options added - show/hide feature image and show/hide excerpt.

= 1.1.2 =
* Bug fix - renamed address's $meta_boxe

= 1.1.1 =
* Bug fix
* Admin page improvments
* Shortcode to display map of a single location on single page template


= 1.1 =
* Bug fix.
* Map types added :ROADMAP,SATELLITE,HYBRID and TERRAIN.
* Change post types and taxonomies slug to names in the setting page.

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.2.5 =
* Plugin improvments

== Screenshots ==

1. For screenshots please visit http://www.wpplaceslocator.com/screenshots



