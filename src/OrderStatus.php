<?php

namespace PropagoSoap;

class OrderStatus
{
    const __default = 'ApprovalDenied';
    const ApprovalDenied = 'ApprovalDenied';
    const ApprovalPending = 'ApprovalPending';
    const AwaitingPaymentAuthorization = 'AwaitingPaymentAuthorization';
    const AwaitingShipment = 'AwaitingShipment';
    const AwaitingSerialCapture = 'AwaitingSerialCapture';
    const BackOrdered = 'BackOrdered';
    const BatchProcessing = 'BatchProcessing';
    const Canceled = 'Canceled';
    const Closed = 'Closed';
    const Consolidated = 'Consolidated';
    const FastPickPack = 'FastPickPack';
    const FastPickPackNotPrinted = 'FastPickPackNotPrinted';
    const Firmed = 'Firmed';
    const Invoiced = 'Invoiced';
    const OnHold = 'OnHold';
    const Picking = 'Picking';
    const PreClose = 'PreClose';
    const QuickShip = 'QuickShip';
    const Released = 'Released';
    const Saved = 'Saved';
    const Shipping = 'Shipping';
    const Waved = 'Waved';
    const Unknown = 'Unknown';


}
