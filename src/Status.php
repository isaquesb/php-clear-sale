<?php
namespace ClearSale;

class Status
{
    const APPROVAL_AUTOMATIC = 'APA';
    const APPROVAL_MANUAL = 'APM';
    const APPROVAL_POLICIES = 'APP';
    const DENIED_AUTOMATIC = 'RPA';
    const DENIED_POLICIES = 'RPP';
    const DENIED_WITHOUT_SUSPICION = 'RPM';
    const MANUAL_ANALYSIS = 'AMA';
    const NEW_ORDER = 'NVO';
    const SUSPENSION_MANUAL = 'SUS';
    const CANCELLED_CUSTOMER = 'CAN';
    const FRAUD_CONFIRMED = 'FRD';

    const STATUS_NEW = 0;
    const STATUS_APPROVED = 9;
    const STATUS_CANCELLED = 41;
    const STATUS_DENIED = 45;

    const PAYMENT_APPROVED = 'PGA';
    const PAYMENT_DENIED = 'PGR';
}
