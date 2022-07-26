<?php 

	//CRUD
	class TarefaService {

		private $conexao;
		private $tarefa;

		public function __construct(Conexao $conexao,Tarefa $tarefa){ // recurso de tipagem
			$this->conexao = $conexao->conectar();
			$this->tarefa = $tarefa;
		}

		public function create(){

			$query = 'insert into tb_tarefas(tarefa)values(:tarefa)';
			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
			$stmt->execute();

		}

		public function read(){

		}

		public function update(){

		}

		public function delete(){

		}
	}

?>