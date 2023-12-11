CREATE DATABASE cronometrais;
USE cronometrais;

CREATE TABLE adm(
    CD_ADM INT PRIMARY KEY AUTO_INCREMENT,
    Key_senha VARCHAR(45),
    NE_Email VARCHAR(45)
);

CREATE TABLE provedora(
    CD_Provedora INT PRIMARY KEY AUTO_INCREMENT,
    NM_Provedora VARCHAR(65),
    NE_Email VARCHAR(100),
    CD_CNPJ VARCHAR(35),
    AS_Assinatura INT,
    IM_Logo LONGTEXT,
    NM_CEO VARCHAR(60),
    Key_senha VARCHAR(60)
);

CREATE TABLE usuario(
    cd_Usuario INT PRIMARY KEY AUTO_INCREMENT,
    NM_Nome VARCHAR(60),
    Key_senha VARCHAR(60),
    NE_Email VARCHAR(100),
    CD_RG VARCHAR(35),
    NR_Telefone VARCHAR(20),
    EN_Endereco VARCHAR(100),
    AS_Assinatura INT,
    PACK_auxiliar INT,
    IM_ImgPerfil LONGTEXT
);

CREATE TABLE horarios(
    CD_Horarios INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE onibus(
    CD_Onibus INT PRIMARY KEY AUTO_INCREMENT,
    CD_Placa VARCHAR(7),
    RT_Rota LONGTEXT,
    DS_Descricao VARCHAR(200),
    BG_Bagagem INT,
    AV_Avaliacao INT,
    ST_Status VARCHAR(15),
    IM_Foto LONGTEXT,
    id_Provedora INT,
    FOREIGN KEY (id_Provedora) REFERENCES provedora(CD_Provedora),
    id_Horarios INT,
    FOREIGN KEY (id_Horarios) REFERENCES horarios(CD_Horarios)
);

CREATE TABLE tempos(
    CD_Tempos INT PRIMARY KEY AUTO_INCREMENT,
    TP_Inicial INT,
    TP_Final INT,
    DS_Local VARCHAR(200),
    id_Horarios INT,
    FOREIGN KEY (id_Horarios)REFERENCES horarios(CD_Horarios)
);

CREATE TABLE avaliacao(
    CD_Avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    DS_Comentario LONGTEXT,
    NT_Nota INT,
    id_Usuario INT,
    FOREIGN KEY (id_Usuario) REFERENCES usuario(CD_Usuario),
    id_Onibus INT,
    FOREIGN KEY (id_Onibus) REFERENCES onibus(CD_Onibus)
);