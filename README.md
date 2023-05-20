Magento 2: Transaction refused in PayPal Because of Custom Charge

PayPal gateway has rejected request. The totals of the cart item amounts do not match order amounts (#10413: Transaction refused because of an invalid argument. See additional error messages for details).

The totals of the cart item amounts do not match order amounts.

In order to install module, you can do it two ways:

1) Install By Composer
   1) Take clone
   2) run composer require sbdevblog/paypal-nvp
   3) Run necessary magento commands like setup:upgrade, di:compile, static-content:deploy
3) Install From App/Code
   1) Clone and Just extract zip and paste SbDevBlog/PaypalNvp directory inside app/code
   2) Run necessary magento commands like setup:upgrade, di:compile, static-content:deploy



