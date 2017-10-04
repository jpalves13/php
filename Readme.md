Webservice com o intuito de validar os dados. 

Caso haja divergências, retornará o json mais atualizado. Caso contrário será informado "304 Not Modified".

Parâmetros:
	
	//usuário e senha de autenticação
	authorization: Basic YWRtaW46WVdSdGFXND0=
	//dados a receber
	Content-md5: dados
	//retorno dos dados via json
	Content-type: application/json
