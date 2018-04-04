<?php

namespace PropagoSoap;

class OrderService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetOrderDetails' => 'PropagoSoap\\GetOrderDetails',
      'Credentials' => 'PropagoSoap\\Credentials',
      'GetOrderDetailsResponse' => 'PropagoSoap\\GetOrderDetailsResponse',
      'ServiceResponseOfOrder' => 'PropagoSoap\\ServiceResponseOfOrder',
      'Order' => 'PropagoSoap\\Order',
      'User' => 'PropagoSoap\\User',
      'ShipToAddress' => 'PropagoSoap\\ShipToAddress',
      'BillToAddress' => 'PropagoSoap\\BillToAddress',
      'ArrayOfOrderLine' => 'PropagoSoap\\ArrayOfOrderLine',
      'OrderLine' => 'PropagoSoap\\OrderLine',
      'LinePart' => 'PropagoSoap\\LinePart',
      'ArrayOfCustomField' => 'PropagoSoap\\ArrayOfCustomField',
      'CustomField' => 'PropagoSoap\\CustomField',
      'AcceptNewOrders' => 'PropagoSoap\\AcceptNewOrders',
      'ArrayOfString' => 'PropagoSoap\\ArrayOfString',
      'AcceptNewOrdersResponse' => 'PropagoSoap\\AcceptNewOrdersResponse',
      'ServiceResponseOfBoolean' => 'PropagoSoap\\ServiceResponseOfBoolean',
      'GetNewOrders' => 'PropagoSoap\\GetNewOrders',
      'GetNewOrdersResponse' => 'PropagoSoap\\GetNewOrdersResponse',
      'ServiceResponseOfListOfOrder' => 'PropagoSoap\\ServiceResponseOfListOfOrder',
      'ArrayOfOrder' => 'PropagoSoap\\ArrayOfOrder',
      'SearchOrders' => 'PropagoSoap\\SearchOrders',
      'OrderSearch' => 'PropagoSoap\\OrderSearch',
      'ArrayOfSearchOrderStatus' => 'PropagoSoap\\ArrayOfSearchOrderStatus',
      'SearchOrdersResponse' => 'PropagoSoap\\SearchOrdersResponse',
      'PagedServiceResponseOfBasicOrderInformation' => 'PropagoSoap\\PagedServiceResponseOfBasicOrderInformation',
      'ServiceResponseOfListOfBasicOrderInformation' => 'PropagoSoap\\ServiceResponseOfListOfBasicOrderInformation',
      'ArrayOfBasicOrderInformation' => 'PropagoSoap\\ArrayOfBasicOrderInformation',
      'BasicOrderInformation' => 'PropagoSoap\\BasicOrderInformation',
      'GetOrderByPoNumber' => 'PropagoSoap\\GetOrderByPoNumber',
      'GetOrderByPoNumberResponse' => 'PropagoSoap\\GetOrderByPoNumberResponse',
      'GetOrderStatus' => 'PropagoSoap\\GetOrderStatus',
      'GetOrderStatusResponse' => 'PropagoSoap\\GetOrderStatusResponse',
      'ServiceResponseOfOrderStatus' => 'PropagoSoap\\ServiceResponseOfOrderStatus',
      'SubmitOrder' => 'PropagoSoap\\SubmitOrder',
      'SubmitOrderResponse' => 'PropagoSoap\\SubmitOrderResponse',
      'ServiceResponseOfString' => 'PropagoSoap\\ServiceResponseOfString',
      'GetShippingInformation' => 'PropagoSoap\\GetShippingInformation',
      'GetShippingInformationResponse' => 'PropagoSoap\\GetShippingInformationResponse',
      'ServiceResponseOfListOfShipper' => 'PropagoSoap\\ServiceResponseOfListOfShipper',
      'ArrayOfShipper' => 'PropagoSoap\\ArrayOfShipper',
      'Shipper' => 'PropagoSoap\\Shipper',
      'ArrayOfShipperDetail' => 'PropagoSoap\\ArrayOfShipperDetail',
      'ShipperDetail' => 'PropagoSoap\\ShipperDetail',
      'ArrayOfShipperLine' => 'PropagoSoap\\ArrayOfShipperLine',
      'ShipperLine' => 'PropagoSoap\\ShipperLine',
      'ArrayOfSerializationInfo' => 'PropagoSoap\\ArrayOfSerializationInfo',
      'SerializationInfo' => 'PropagoSoap\\SerializationInfo',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'connection_timeout' => 120,
      'cache_wsdl' => 2,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://api.mypropago.com/public/orderservice.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetOrderDetails $parameters
     * @return GetOrderDetailsResponse
     */
    public function GetOrderDetails(GetOrderDetails $parameters)
    {
      return $this->__soapCall('GetOrderDetails', array($parameters));
    }

    /**
     * @param AcceptNewOrders $parameters
     * @return AcceptNewOrdersResponse
     */
    public function AcceptNewOrders(AcceptNewOrders $parameters)
    {
      return $this->__soapCall('AcceptNewOrders', array($parameters));
    }

    /**
     * @param GetNewOrders $parameters
     * @return GetNewOrdersResponse
     */
    public function GetNewOrders(GetNewOrders $parameters)
    {
      return $this->__soapCall('GetNewOrders', array($parameters));
    }

    /**
     * @param SearchOrders $parameters
     * @return SearchOrdersResponse
     */
    public function SearchOrders(SearchOrders $parameters)
    {
      return $this->__soapCall('SearchOrders', array($parameters));
    }

    /**
     * @param GetOrderByPoNumber $parameters
     * @return GetOrderByPoNumberResponse
     */
    public function GetOrderByPoNumber(GetOrderByPoNumber $parameters)
    {
      return $this->__soapCall('GetOrderByPoNumber', array($parameters));
    }

    /**
     * @param GetOrderStatus $parameters
     * @return GetOrderStatusResponse
     */
    public function GetOrderStatus(GetOrderStatus $parameters)
    {
      return $this->__soapCall('GetOrderStatus', array($parameters));
    }

    /**
     * @param SubmitOrder $parameters
     * @return SubmitOrderResponse
     */
    public function SubmitOrder(SubmitOrder $parameters)
    {
      return $this->__soapCall('SubmitOrder', array($parameters));
    }

    /**
     * @param GetShippingInformation $parameters
     * @return GetShippingInformationResponse
     */
    public function GetShippingInformation(GetShippingInformation $parameters)
    {
      return $this->__soapCall('GetShippingInformation', array($parameters));
    }

}
