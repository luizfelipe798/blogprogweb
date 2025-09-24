CREATE DATABASE IF NOT EXISTS blog;
USE blog;

CREATE TABLE usuario
(    
    id                 INT               AUTO_INCREMENT PRIMARY KEY,
    nome               VARCHAR(50)       NOT NULL,
    email              VARCHAR(255)      NOT NULL,
    senha              CHAR(60)          NOT NULL,
    data_criacao       DATETIME          NOT NULL   DEFAULT CURRENT_TIMESTAMP,
    ativo              TINYINT(4)        NOT NULL DEFAULT '0',
    adm                TINYINT(4)        NOT NULL DEFAULT '0'
);

CREATE TABLE post
(
	id                INT                PRIMARY KEY   NOT NULL  AUTO_INCREMENT,
    titulo            VARCHAR(255)       NOT NULL,
    texto             TEXT               NOT NULL,
    usuario_id        INT                NOT NULL,
    data_criacao      DATETIME           NOT NULL      DEFAULT now(),
    data_postagem     DATETIME           NOT NULL,
    
    KEY fk_post_usuario_idx(usuario_id),
    CONSTRAINT fk_post_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id)
);

DELETE FROM usuario;

UPDATE usuario
SET ativo = 1, adm = 1
WHERE id = 26;

SELECT * FROM usuario;
SELECT * FROM post;

TRUNCATE TABLE post;
	
INSERT INTO post(titulo, texto, usuario_id, data_criacao, data_postagem)
VALUES('Teste de postzinho para o blog', 'textinho para o blogzinho do professor murilo e do professor cassio', '24', '2025-09-17', '2025-08-10');