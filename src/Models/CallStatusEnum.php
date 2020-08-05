<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

/**
 * - `RINGING` : User phone number was called, it has not picked up yet
 * - `CONNECTED` : User picked up.
 * - `SUCCESS` : Authentication was successfully validated.
 * - `ANSWERING_MACHINE` : User answering machine was detected by the server
 * - `HANG_UP` : User hanged up before server was able to validate the authentication
 * - `TIMEOUT` : Server hanged up
 * - `ERROR` : Authentication failed
 */
class CallStatusEnum
{
    /**
     * TODO: Write general description for this element
     */
    const RINGING = "RINGING";

    /**
     * TODO: Write general description for this element
     */
    const CONNECTED = "CONNECTED";

    /**
     * TODO: Write general description for this element
     */
    const SUCCESS = "SUCCESS";

    /**
     * TODO: Write general description for this element
     */
    const ANSWERING_MACHINE = "ANSWERING_MACHINE";

    /**
     * TODO: Write general description for this element
     */
    const HANG_UP = "HANG_UP";

    /**
     * TODO: Write general description for this element
     */
    const TIMEOUT = "TIMEOUT";

    /**
     * TODO: Write general description for this element
     */
    const ERROR = "ERROR";
}
