<?php
/**
 * @copyright Copyright (c) sbdevblog (http://www.sbdevblog.com)
 */

namespace SbDevBlog\PaypalNvp\Plugin\Model;

use Magento\Paypal\Model\Api\AbstractApi;

class Nvp
{
    /**
     * Fix: The totals of the cart item amounts do not match order amounts.
     *
     * @param AbstractApi $subject
     * @param $title
     * @param array $request
     * @return array
     */
    public function beforeCall(AbstractApi $subject, $title, array $request)
    {
        if (isset($request['ITEMAMT']) && isset($request['SHIPPINGAMT']) && isset($request['TAXAMT'])) {
            $request['AMT'] = $request['ITEMAMT'] + $request['SHIPPINGAMT'] + $request['TAXAMT'];
        }
        return [$title, $request];
    }
}
