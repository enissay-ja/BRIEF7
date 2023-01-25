<?php 

    class Database {

        private $user = "root";

        private $password = "";

        private $host = "localhost";

        private $port = 3306;

        private $db_name = "brief7";

        private $dbh;

        private $stmt;

        private $err;


        function __construct(){ // Magic Method 

            $dsn = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname" . $this->db_name; // Data source name // mysql:host=host port = port dbname = dbname

            $options = array(

                PDO::ATTR_PERSISTENT => false, // PDO::ATTR_PRESISTENET => conection should not be intreputed 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

            );

            try{

                $this->dbh = new PDO($dsn , $this->user, $this->password, $options);

            }catch(PDOException $err){

                $this->err = $err->getMessage();
                echo "The err is from database class : " .$this->err;
            }
        }

        // it will take the sql query and prepare it to be execute

        public function query($sql){

            $this->stmt = $this->dbh->prepare($sql);

        }

        //Bind value function 

        public function bind($param, $value, $type = null){ // bind : 

            if(is_null($type)){ // if the framework user didn't pass the type 

                switch(true){

                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value): 
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value): 
                        $type = PDO::PARAM_NULL;
                        break;
                    default: 
                        $type = PDO::PARAM_STR;


                }

            }

            $this->stmt->bindValue($param, $value, $type);
        }

        public function execute(){ // It will execute the SQL query and the 'stmt' attribute is already prepared to be executed

            return $this->stmt->execute();
        }

        // Fetch result

        public function resultSet(){  // Evreything

            $this->execute();

            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function multiple($query){  // fetch all but in the form of an array 

            $this->stmt = $this->dbh->prepare($query);
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);


        }

        public function single() { // Fetch a single obj 

            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);

        }

        public function rowCount(){ // count the rows (for statistiques)

            return $this->stmt->rowCount();

        }


    }