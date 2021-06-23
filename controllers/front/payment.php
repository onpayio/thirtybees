<?php
/**
 * MIT License
 *
 * Copyright (c) 2019 OnPay.io
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * @since 1.5.0
 */
class OnpayPaymentModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign([
            'HOOK_LEFT_COLUMN' => $this->hookDisplayLeftColumn(),
        ]);

        $onpay = Module::getInstanceByName('onpay');
        $paymentWindow = new \OnPay\API\PaymentWindow();
        $paymentWindow->setSecret(Configuration::get(Onpay::SETTING_ONPAY_SECRET));

        if ($paymentWindow->validatePayment(Tools::getAllValues()) && false !== Tools::getValue('accept')) {
            // The payment was successful, we'll unset the cart.
            Context::getContext()->cart = new Cart();

            $this->setTemplate('payment_success.tpl');
        } else {
            $this->setTemplate('payment_decline.tpl');
        }
    }

    public function hookDisplayLeftColumn() {
        // We don't want any left column hooks showing on this page.
        return false;
    }
}
