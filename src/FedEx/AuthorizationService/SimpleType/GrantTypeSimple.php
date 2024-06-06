<?php


namespace FedEx\AuthorizationService\SimpleType;


use FedEx\AbstractSimpleType;

class GrantTypeSimple extends AbstractSimpleType
{
    const CLIENT_CREDENTIALS = 'client_credentials';
    const CSP_CREDENTIALS = 'csp_credentials';
    const CLIENT_PC_CREDENTIALS = 'client_pc_credentials';
}
