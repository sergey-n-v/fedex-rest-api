<?php


namespace FedExRestApi\AuthorizationService\SimpleType;


use FedExRestApi\AbstractSimpleType;

class GrantTypeSimple extends AbstractSimpleType
{
    const CLIENT_CREDENTIALS = 'client_credentials';
    const CSP_CREDENTIALS = 'csp_credentials';
    const CLIENT_PC_CREDENTIALS = 'client_pc_credentials';
}
