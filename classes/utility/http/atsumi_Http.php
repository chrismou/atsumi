<?php

/**
 *
 * @package Utility
 * @subpackage Http
 */
class atsumi_Http {


	// 1xx Informational

	const	INFO_CONTINUE								= 100;
	const	INFO_SWITHCING_PROTOCOLS					= 101;
	const	INFO_PROCESSING								= 102;


	// 2xx Informational

	const	SUCCESS_OK									= 200;
	const	SUCCESS_CREATED								= 201;
	const	SUCCESS_ACCEPTED							= 202;
	const	SUCCESS_NON_AUTHORITATIVE_INFORMATION		= 203;
	const	SUCCESS_NO_CONTENT							= 204;
	const	SUCCESS_RESET_CONTENT						= 205;
	const	SUCCESS_PARTIAL_CONTENT						= 206;
	const	SUCCESS_MULTI_STATUS						= 207;


	// 3xx Redirection

	const	REDIRECT_MULTIPLE_CHOICES					= 300;
	const	REDIRECT_MOVED_PERMANENTLY					= 301;
	const	REDIRECT_FOUND								= 302;
	const	REDIRECT_SEE_OTHER							= 303;
	const	REDIRECT_NOT_MODIFIED						= 304;
	const	REDIRECT_USE_PROXY							= 305;
	const	REDIRECT_SWITCH_PROXY						= 306;
	const	REDIRECT_TEMPORARY							= 307;


	// 4xx Client Error

	const	CLIENT_ERROR_BAD_REQUEST					= 400;
	const	CLIENT_ERROR_UNAUTHORIZED					= 401;
	const	CLIENT_ERROR_PAYMENT_REQUIRED				= 402;
	const	CLIENT_ERROR_FORBIDDEN						= 403;
	const	CLIENT_ERROR_NOT_FOUND						= 404;
	const	CLIENT_ERROR_METHOD_NOT_ALLOWED				= 405;
	const	CLIENT_ERROR_NOT_ACCEPTABLE					= 406;
	const	CLIENT_ERROR_PROXY_AUTHENTICATION_REQUIRED	= 407;
	const	CLIENT_ERROR_REQUEST_TIMEOUT				= 400;
	const	CLIENT_ERROR_CONFLICT						= 401;
	const	CLIENT_ERROR_GONE							= 402;
	const	CLIENT_ERROR_LENGTH_REQUIRED				= 403;
	const	CLIENT_ERROR_PRECONDITION_FAILED			= 404;
	const	CLIENT_ERROR_REQUEST_ENTITY_TOO_LARGE		= 405;
	const	CLIENT_ERROR_REQUEST_URI_TOO_LONG			= 406;
	const	CLIENT_ERROR_UNSUPPORTED_MEDIA_TYPE			= 407;

	//.. add the rest...

}


?>