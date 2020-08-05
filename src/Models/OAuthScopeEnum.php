<?php
/*
 * HaitiPayAcceptorAPILib
 *
 * This file was automatically generated for HaitiPay by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HaitiPayAcceptorAPILib\Models;

/**
 * OAuth 2 scopes supported by the API
 */
class OAuthScopeEnum
{
    /**
     * View clients information
     */
    const CLIENTS_VIEW = "clients_view";

    /**
     * View acceptor accounts information
     */
    const ACCOUNTS_VIEW = "accounts_view";

    /**
     * View client accounts information
     */
    const CLIENT_ACCOUNTS_VIEW = "client_accounts_view";

    /**
     * Make cashin transaction
     */
    const CASHIN = "cashin";

    /**
     * Make cashout transaction
     */
    const CASHOUT = "cashout";

    /**
     * Make bill payment transaction
     */
    const BILL_PAYMENT = "bill_payment";

    /**
     * Make payment transaction
     */
    const PAYMENT = "payment";

    /**
     * Make reversal transaction
     */
    const REVERSAL = "reversal";

    /**
     * Authenticate acceptor with it's pincode
     */
    const AUTHENTICATION_PINCODE_ACCEPTOR = "authentication_pincode_acceptor";

    /**
     * Authenticate client with it's pincode
     */
    const AUTHENTICATION_PINCODE_CLIENT = "authentication_pincode_client";

    /**
     * Authenticate client with it's pincode through IVR
     */
    const AUTHENTICATION_PINCODE_CLIENT_IVR = "authentication_pincode_client_ivr";

    /**
     * Authenticate client with a one time password
     */
    const AUTHENTICATION_OTP_CLIENT = "authentication_otp_client";

    /**
     * Authenticate client with NSDT
     */
    const AUTHENTICATION_NSDT = "authentication_nsdt";

    /**
     * Authenticate client with QR Code
     */
    const AUTHENTICATION_QR_CODE = "authentication_qr_code";

    /**
     * Cancel an ongoing transaction
     */
    const AUTHENTICATION_CANCEL = "authentication_cancel";

    /**
     * Generate a transaction code
     */
    const AUTHENTICATION_TRANSACTION_CODE = "authentication_transaction_code";
}
