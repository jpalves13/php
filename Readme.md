Webservice com o intuito de validar os dados. 

Caso haja diverg�ncias, retornar� o json mais atualizado. Caso contr�rio ser� informado "304 Not Modified".

Par�metros:
	
	//usu�rio e senha de autentica��o
	authorization: Basic YWRtaW46WVdSdGFXND0=
	//md5 dos dados que � receber
	Content-md5: dados
	//retorno dos dados via json
	Content-type: application/json