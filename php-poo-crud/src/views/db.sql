USE db_sistema;

CREAT TABLE tb_alunos (
    idalunos INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) NOT NULL,
    cidade VARCHAR(20) NOT NULL,
);