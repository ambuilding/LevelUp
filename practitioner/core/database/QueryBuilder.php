<?php 

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
	  $this->pdo = $pdo;
	}

	public function selectAll($table)
  {
      $statement = $this->pdo->prepare("select * from {$table}");
      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters)
  {
    //die(var_dump(array_keys($parameters)));

    $sql = sprintf(
      'insert into %s (%s) values (%s)', 
      $table, 
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );
    // $arrays = ['one', 'two', 'three'];
    // implode(', ', $arrays); // one, two, three

    try {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
    } catch (Exception $e) {
      //die('Whoops, something went wrong.');
        die($e->getMessage());
    }

    

    //die(var_dump($sql));
    // insert into %s (%s) values (%s)
    // insert into names (name, email) values (:name, :email)
    //$statement->execute(['name' => 'Jine', 'email' => 'jine@example.com']);
  }
}

  /*
  public function fetchAllTasks($pdo)
  {
      $statement = $this->pdo->prepare("select * from todos");
      $statement->execute();
      //var_dump($statement->fetchAll(PDO::FETCH_OBJ));
      //$tasks = $statement->fetchAll(PDO::FETCH_OBJ); 
      return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

      //var_dump($tasks[0]->foobar());
      //var_dump($results[0]->description);
  }
  */
