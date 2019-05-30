<?php
namespace ClearSale;

class Delivery extends Entity
{
    const OTHERS = 0;
    const NORMAL = 1;
    const GUARANTEED = 2;
    const EXPRESS_BRAZIL = 3;
    const EXPRESS_SAO_PAULO = 4;
    const HIGH = 5;
    const ECONOMIC = 6;
    const SCHEDULEID = 7;
    const EXTRA_FAST = 8;
    const VIA_PRINT = 9;
    const VIA_APP = 10;
    const MAIL = 11;
    const MOTOCYCLE_COURIER = 12;
    const WITHDRAWL_AT_TICKET_BOX = 13;
    const WITHDRAWL_AT_PARTINER_STORE = 14;
    const TICKET_CREDIT_CARD = 15;
    const WITHDRAWL_AT_STORE = 16;
    const WITHDRAWL_VIA_LOCKERS = 17;
    const WITHDRAWL_AT_MAIL_AGENCY = 18;
    const GUARANTEED_DELIVERY_SAME_DAY_PURCHASE = 19;
    const GUARANTEED_DELIVERY_AFTER_DAY_PURCHASE = 20;
    const WITHDRAWL_AT_STORE_EXPRESS = 21;
}
