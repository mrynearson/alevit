Sprite Graphic Menu
----------------------
Author - Ariel Barreiro (hanoii) http://drupal.org/user/23157
abarrei@gmail.com

Overview:
--------
It let you upload a sprite image for a menu item and, with the use of CSS,
configure different sprites of the image for different states of the link
(normal, visited, hover and active).

IMPORTANT NOTE

This module overrides two phptemplate functions (phptemplate_menu_item_link()
and phptemplate_links()). If you are planning on installing this module on a theme
that overides those functions as well, you'll need to rename them to
phptemplate_spritemenu_menu_item_link() and phptemplate_spritemenu_links(). If
you do this, you will also need to modify your theme code so they include proper
IDs on the links for the CSS of this module to work properly.

Please refer to the code and look for theme_spritemenu_menu_item_link() and
theme_spritemenu_links() for ideas on how to do it.

You will receive an install error if the module finds these funtion on your theme
and it won't let you install the module until you rename them.

If at any moment, you decide to disable this module, rename back your overides
to the proper names.

Sponsored by:
Infomagnet (http://www.infomagnet.com)

Installation:
------------

1. Copy the spritemenu directory to the Drupal sites/<...>/modules/ directory.

2. Go to "Administer" -> "Modules" and enable the module.

3. Go to "Administer" -> "Menus" and edit any of the menus.

4. You will see a "Sprite Graphic Menu" collapsed underneath the normal menu
form. You can upload the sprite image and configure the sprite coordinates of the
different states from there.

Last updated:
------------
$Id: README.txt,v 1.1 2008/12/25 21:18:38 hanoii Exp $