<?php

namespace PropagoSoap;

class ServiceReturnCode
{
    const __default = 'Undefined';
    const Undefined = 'Undefined';
    const Success = 'Success';
    const OrderRetrievedSuccessfully = 'OrderRetrievedSuccessfully';
    const ShipmentCreatedSuccessfuly = 'ShipmentCreatedSuccessfuly';
    const InvalidLoginNameKeyCombination = 'InvalidLoginNameKeyCombination';
    const UnAuthorizedAccess = 'UnAuthorizedAccess';
    const InvalidOrderNumber = 'InvalidOrderNumber';
    const InvalidCarrierName = 'InvalidCarrierName';
    const ShipmentHasAlreadyBeenSubmittedForThisOrder = 'ShipmentHasAlreadyBeenSubmittedForThisOrder';
    const UnexpectedErrorOnServer = 'UnexpectedErrorOnServer';
    const ServiceTypeNotEnabled = 'ServiceTypeNotEnabled';
    const OrderProcessIncomplete = 'OrderProcessIncomplete';
    const OrderPlacementError = 'OrderPlacementError';
    const NoShipmentsFoundForOrder = 'NoShipmentsFoundForOrder';
    const SkuCreationError = 'SkuCreationError';
    const SkuNotFound = 'SkuNotFound';
    const SearchError = 'SearchError';
    const CompanyCredentialsRequired = 'CompanyCredentialsRequired';
    const InvalidShipmentQuantity = 'InvalidShipmentQuantity';
    const InvalidOrderLineId = 'InvalidOrderLineId';
    const ShipmentError = 'ShipmentError';
    const ShipmentNotFound = 'ShipmentNotFound';
    const InvalidOrderOperation = 'InvalidOrderOperation';
    const PaymentProcessingError = 'PaymentProcessingError';
    const NoShipmentData = 'NoShipmentData';
    const NoData = 'NoData';


}
