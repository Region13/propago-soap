<?php


 function autoload_b3c6e856641c0cc597bde411fdec95f9($class)
{
    $classes = array(
        'PropagoSoap\OrderService' => __DIR__ .'/OrderService.php',
        'PropagoSoap\GetOrderDetails' => __DIR__ .'/GetOrderDetails.php',
        'PropagoSoap\Credentials' => __DIR__ .'/Credentials.php',
        'PropagoSoap\GetOrderDetailsResponse' => __DIR__ .'/GetOrderDetailsResponse.php',
        'PropagoSoap\ServiceResponseOfOrder' => __DIR__ .'/ServiceResponseOfOrder.php',
        'PropagoSoap\ServiceReturnCode' => __DIR__ .'/ServiceReturnCode.php',
        'PropagoSoap\Order' => __DIR__ .'/Order.php',
        'PropagoSoap\User' => __DIR__ .'/User.php',
        'PropagoSoap\ShipToAddress' => __DIR__ .'/ShipToAddress.php',
        'PropagoSoap\BillToAddress' => __DIR__ .'/BillToAddress.php',
        'PropagoSoap\ArrayOfOrderLine' => __DIR__ .'/ArrayOfOrderLine.php',
        'PropagoSoap\OrderLine' => __DIR__ .'/OrderLine.php',
        'PropagoSoap\EnumOrderLineStatus' => __DIR__ .'/EnumOrderLineStatus.php',
        'PropagoSoap\LinePart' => __DIR__ .'/LinePart.php',
        'PropagoSoap\ArrayOfCustomField' => __DIR__ .'/ArrayOfCustomField.php',
        'PropagoSoap\CustomField' => __DIR__ .'/CustomField.php',
        'PropagoSoap\AcceptNewOrders' => __DIR__ .'/AcceptNewOrders.php',
        'PropagoSoap\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'PropagoSoap\AcceptNewOrdersResponse' => __DIR__ .'/AcceptNewOrdersResponse.php',
        'PropagoSoap\ServiceResponseOfBoolean' => __DIR__ .'/ServiceResponseOfBoolean.php',
        'PropagoSoap\GetNewOrders' => __DIR__ .'/GetNewOrders.php',
        'PropagoSoap\GetNewOrdersResponse' => __DIR__ .'/GetNewOrdersResponse.php',
        'PropagoSoap\ServiceResponseOfListOfOrder' => __DIR__ .'/ServiceResponseOfListOfOrder.php',
        'PropagoSoap\ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'PropagoSoap\SearchOrders' => __DIR__ .'/SearchOrders.php',
        'PropagoSoap\OrderSearch' => __DIR__ .'/OrderSearch.php',
        'PropagoSoap\SearchOrderStatus' => __DIR__ .'/SearchOrderStatus.php',
        'PropagoSoap\ArrayOfSearchOrderStatus' => __DIR__ .'/ArrayOfSearchOrderStatus.php',
        'PropagoSoap\SearchOrdersResponse' => __DIR__ .'/SearchOrdersResponse.php',
        'PropagoSoap\PagedServiceResponseOfBasicOrderInformation' => __DIR__ .'/PagedServiceResponseOfBasicOrderInformation.php',
        'PropagoSoap\ServiceResponseOfListOfBasicOrderInformation' => __DIR__ .'/ServiceResponseOfListOfBasicOrderInformation.php',
        'PropagoSoap\ArrayOfBasicOrderInformation' => __DIR__ .'/ArrayOfBasicOrderInformation.php',
        'PropagoSoap\BasicOrderInformation' => __DIR__ .'/BasicOrderInformation.php',
        'PropagoSoap\OrderStatus' => __DIR__ .'/OrderStatus.php',
        'PropagoSoap\GetOrderByPoNumber' => __DIR__ .'/GetOrderByPoNumber.php',
        'PropagoSoap\GetOrderByPoNumberResponse' => __DIR__ .'/GetOrderByPoNumberResponse.php',
        'PropagoSoap\GetOrderStatus' => __DIR__ .'/GetOrderStatus.php',
        'PropagoSoap\GetOrderStatusResponse' => __DIR__ .'/GetOrderStatusResponse.php',
        'PropagoSoap\ServiceResponseOfOrderStatus' => __DIR__ .'/ServiceResponseOfOrderStatus.php',
        'PropagoSoap\SubmitOrder' => __DIR__ .'/SubmitOrder.php',
        'PropagoSoap\SubmitOrderResponse' => __DIR__ .'/SubmitOrderResponse.php',
        'PropagoSoap\ServiceResponseOfString' => __DIR__ .'/ServiceResponseOfString.php',
        'PropagoSoap\GetShippingInformation' => __DIR__ .'/GetShippingInformation.php',
        'PropagoSoap\GetShippingInformationResponse' => __DIR__ .'/GetShippingInformationResponse.php',
        'PropagoSoap\ServiceResponseOfListOfShipper' => __DIR__ .'/ServiceResponseOfListOfShipper.php',
        'PropagoSoap\ArrayOfShipper' => __DIR__ .'/ArrayOfShipper.php',
        'PropagoSoap\Shipper' => __DIR__ .'/Shipper.php',
        'PropagoSoap\ArrayOfShipperDetail' => __DIR__ .'/ArrayOfShipperDetail.php',
        'PropagoSoap\ShipperDetail' => __DIR__ .'/ShipperDetail.php',
        'PropagoSoap\ArrayOfShipperLine' => __DIR__ .'/ArrayOfShipperLine.php',
        'PropagoSoap\ShipperLine' => __DIR__ .'/ShipperLine.php',
        'PropagoSoap\ArrayOfSerializationInfo' => __DIR__ .'/ArrayOfSerializationInfo.php',
        'PropagoSoap\SerializationInfo' => __DIR__ .'/SerializationInfo.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b3c6e856641c0cc597bde411fdec95f9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
