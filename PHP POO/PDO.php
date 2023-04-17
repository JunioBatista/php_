<?php
//estrututa da classe PDO

PDO {
    public __construct ( string $dsn [, string $username [, string $passwd [, array $options ]]] )
    public beginTransaction ( void ) : bool
    public commit ( void ) : bool
    public errorCode ( void ) : string
    public errorInfo ( void ) : array
    public exec ( string $statement ) : int
    public getAttribute ( int $attribute ) : mixed
    public static getAvailableDrivers ( void ) : array
    public inTransaction ( void ) : bool
    public lastInsertId ([ string $name = NULL ] ) : string
    public prepare ( string $statement [, array $driver_options = array() ] ) : PDOStatement
    public query ( string $statement ) : PDOStatement
    public quote ( string $string [, int $parameter_type = PDO::PARAM_STR ] ) : string
    public rollBack ( void ) : bool
    public setAttribute ( int $attribute , mixed $value ) : bool
}


//estrutura da PDOStatement
PDOStatement implements Traversable {
    /* Propriedades */
    readonly string $queryString;

    /* Métodos */
    public bindColumn ( mixed $column , mixed &$param [, int $type [, int $maxlen [, mixed $driverdata ]]] ) : bool
    public bindParam ( mixed $parameter , mixed &$variable [, int $data_type = PDO::PARAM_STR [, int $length [, mixed $driver_options ]]] ) : bool
    public bindValue ( mixed $parameter , mixed $value [, int $data_type = PDO::PARAM_STR ] ) : bool
    public closeCursor ( void ) : bool
    public columnCount ( void ) : int
    public debugDumpParams ( void ) : void
    public errorCode ( void ) : string
    public errorInfo ( void ) : array
    public execute ([ array $input_parameters = NULL ] ) : bool
    public fetch ([ int $fetch_style [, int $cursor_orientation = PDO::FETCH_ORI_NEXT [, int       $cursor_offset = 0 ]]] ) : mixed
    public fetchAll ([ int $fetch_style [, mixed $fetch_argument [, array $ctor_args = array() ]]] ) : array
    public fetchColumn ([ int $column_number = 0 ] ) : mixed
    public fetchObject ([ string $class_name = "stdClass" [, array $ctor_args ]] ) : mixed
    public getAttribute ( int $attribute ) : mixed
    public getColumnMeta ( int $column ) : array
    public nextRowset ( void ) : bool
    public rowCount ( void ) : int
    public setAttribute ( int $attribute , mixed $value ) : bool
    public setFetchMode ( int $mode ) : bool
}

//METODO EXEC
$qtdeLinhasAfetadas = $dsn->exec("Delete From Cliente Where codigo_cliente = 1");
echo "Quantidade de linhas afetadas: " . $qtdeLinhasAfetadas

//pdo query
$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
$resultSet = $dsn->query($sql);
while ($row = $resultSet->fetch()) {
  echo $row['nome'] . "\t";
  echo $row['cpf'] . "\t";
  echo $row['telefone'] . "\n";
}

try {
	$dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}

//Realizando uma consulta no BD através do login e senha recebidos por POST
$login = $_POST['login'];
$pswd = $_POST['pswd'];

$stmt = $dsn->prepare("Select * From Usuario Where login = :login And password =:password");
$stmt->execute([':login' => $login, ':password' => $pswd]);

/*Aqui entraria o código para tratar o resultado da instrução SQL acima*/


//Destruindo o objecto statement e fechando a conexão
$stmt = null;
$dsn = null;

$stmt = $dsn->prepare("Select * From Usuario Where login = ? And password = ?");
$stmt->execute([$login, $pswd]);