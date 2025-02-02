<?php
/**
 * This file is part of O3-Shop Paypal module.
 *
 * O3-Shop is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation, version 3.
 *
 * O3-Shop is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU 
 * General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with O3-Shop.  If not, see <http://www.gnu.org/licenses/>
 *
 * @copyright  Copyright (c) 2022 OXID eSales AG (https://www.oxid-esales.com)
 * @copyright  Copyright (c) 2022 O3-Shop (https://www.o3-shop.com)
 * @license    https://www.gnu.org/licenses/gpl-3.0  GNU General Public License 3 (GPLv3)
 */

/**
 * Price enter mode: bruto
 * Price view mode:  brutto
 * Product count: count of used products
 * VAT info: 19%
 * Currency rate: 0.68
 * Discounts: count
 *  1. bascet 5 abs
 *  2. shop 5 abs for 9001
 *  3. bascet 1 abs for 9001
 *  4. shop 5% for 9002
 *  5. bascet 6% for 9002
 * Vouchers: count
 *  1. 6 abs
 * Wrapping: +;
 * Gift cart:  -;
 * Costs VAT caclulation rule: max
 * Costs:
 *  1. Payment +
 *  2. Delivery +
 *  3. TS -
 * Actions with basket or order:
 *  1. update / delete / change config
 *  2. ...
 *  ...
 * Short description: bug entry / support case other info;
 */
use OxidEsales\Eshop\Application\Model\PaymentGateway;

$data = array(
    'class'     => PaymentGateway::class,
    'action'    => 'doExpressCheckoutPayment',
    'articles'  => array(
        0 => array(
            'oxid'    => 9001,
            'oxprice' => 100,
            'oxvat'   => 19,
            'amount'  => 33,
            'oxstock' => 33,
        ),
        1 => array(
            'oxid'    => 9002,
            'oxprice' => 66,
            'oxvat'   => 19,
            'amount'  => 16,
            'oxstock' => 50,
        ),
    ),
    'discounts' => array(),
    'costs'     => array(),
    'config'    => array(
        'sOEPayPalSandboxUsername'  => 'testUser',
        'sOEPayPalSandboxPassword'  => 'testPassword',
        'sOEPayPalSandboxSignature' => 'testSignature',
        'sOEPayPalTransactionMode'  => 'Sale',
        'sOEPayPalEmptyStockLevel'  => 10,
        'OEPayPalDisableIPN'        => false,
    ),
    'session' => ['oepaypal' => 2],
    'expected'  => array(
        'requestToPayPal' => array(
            'VERSION'                            => '84.0',
            'PWD'                                => 'testPassword',
            'USER'                               => 'testUser',
            'SIGNATURE'                          => 'testSignature',
            'TOKEN'                              => '',
            'PAYERID'                            => '',
            'PAYMENTREQUEST_0_PAYMENTACTION'     => 'Sale',
            'PAYMENTREQUEST_0_AMT'               => '4356.00',
            'PAYMENTREQUEST_0_CURRENCYCODE'      => 'EUR',
            'PAYMENTREQUEST_0_NOTIFYURL'         => '{SHOP_URL}index.php?cl=oepaypalipnhandler&fnc=handleRequest&shp={SHOP_ID}',
            'PAYMENTREQUEST_0_DESC'              => 'Bestellnummer 1',
            'PAYMENTREQUEST_0_CUSTOM'            => 'Bestellnummer 1',
            'BUTTONSOURCE'                       => '{BN_ID_SHORTCUT}',
            'METHOD'                             => 'DoExpressCheckoutPayment',
            'PAYMENTREQUEST_0_SHIPTONAME'        => 'John Doe',
            'PAYMENTREQUEST_0_SHIPTOSTREET'      => 'Maple Street 10',
            'PAYMENTREQUEST_0_SHIPTOCITY'        => 'Any City',
            'PAYMENTREQUEST_0_SHIPTOZIP'         => '9041',
            'PAYMENTREQUEST_0_SHIPTOPHONENUM'    => '217-8918712',
            'PAYMENTREQUEST_0_SHIPTOCOUNTRYCODE' => 'DE',
        ),
        'header'          => array(
            0 => 'POST /cgi-bin/webscr HTTP/1.1',
            1 => 'Content-Type: application/x-www-form-urlencoded',
            2 => 'Host: api-3t.sandbox.paypal.com',
            3 => 'Connection: close',
        )
    )
);
