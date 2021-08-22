Steps to make QR code work for product detail pages are listed as below :-

1. Create a product CT.
2. Add field_link of data type link use external URL in field configurations and save the field.
3. Go the Drupal root and run "composer require aferrandini/phpqrcode" to use this library to generate QR code.
4. Go the custom module sph_qr_code and theme sph.
5. enable both above mentioned module and theme.
6. Product detail page will display QR code for the added link inside node field (field_link).

Please go through the module and theme files for better understanding the code.

As i'm not aware of the Acquia free site setup plan so used pantheon instead.
Please find below credentials for the site :-
Site URL : https://dev-sphtest.pantheonsite.io/user/login
Username : admin
Password : admin@sph2TEST

Product detail page : https://dev-sphtest.pantheonsite.io/products/unicorn-iron-patch

As I'm using my PC for differnt GIT account which i don't want to change for a while to commit changes separatly.

Please accept this as a quick work around and let me know your response.

Hope this will work for you.

Thanks
Kapil Sharma
