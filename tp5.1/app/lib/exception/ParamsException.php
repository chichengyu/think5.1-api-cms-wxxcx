<?php 
namespace app\lib\exception;

class ParamsException extends BaseException
{
	protected $code = 400;
	protected $msg = 'Params Error';
	protected $errorCode = 10004;

}