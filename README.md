# ✨ Hello, world! Bem-vindos ao meu projeto! ✨  

Olá, leitor! 💖 Meu nome é **Aline**, mas pode me chamar de **Boni** tenho 21 anos e sou apaixonada por tecnologia, desenvolvimento mobile, back-end.📚✨  

🌸 Sou natural de **São Paulo**, mas há 2 anos me mudei para **Ibirama** para seguir meu sonho de cursar **Engenharia de Software**. Está sendo uma jornada cheia de desafios, aprendizados

---

## 💡 Sobre este repositório  

Este repositório foi desenvolvido por mim para comprovar minhas habilidades no teste de estágio Magazord! Aqui, compartilho um projeto que foi um **desafio superinteressante**, no qual aprendi bastante e pude ter um contato maior com o desenvolvimento em PHP. Espero que ele possa ajudar outras pessoas também, além de comprovar minhas habilidades :D! 🌷  


## 🎀 Conecte-se comigo!  

Se quiser trocar ideias sobre tecnologia, programação ou apenas falar sobre gatinhos fofos, fique à vontade para me chamar! 💌  

💻 [**LinkedIn**](https://www.linkedin.com/in/aline-rodrigues-santos-535966241/) 
📧 [**Email**](Aline.RS@edu.udesc.br)

Obrigada por passar por aqui! Espero que goste do projeto! ✨  

 

## 🌸 Implementação  

Este projetinho foi desenvolvido com muito carinho usando **PHP** e está disponível na plataforma **acima**! ✨ 

💡 banco MySql da aplicação.

Para o projeto rodar com o servidor do xampp, é necessário alocar a pasta do projeto em xampp/htdocs, pois espera-se que a estrutura de pastas seja: xampp/htdocs/magazord.

Utilizei o Composer para a instalação das dependências Doctrine/ORM e Symfony/Cache. Como o Composer, Doctrine e Symfony já têm suas pastas alocadas no meu projeto, acredito que não seja necessário ter o composer instalado para testar a aplicação.

Também será necessário rodar o script abaixo no SGBD para a criação do banco e suas tabelas respectivas:

CREATE DATABASE IF NOT EXISTS magazord
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE sistema;

CREATE TABLE pessoa (
    idpessoa INT PRIMARY KEY AUTO_INCREMENT,
    nomepessoa VARCHAR(100) NOT NULL,
    cpfpessoa VARCHAR(14) NOT NULL
);

CREATE TABLE contato (
    idcontato INT PRIMARY KEY AUTO_INCREMENT,
    idpessoa INT NOT NULL,
    tipocontato TINYINT(1) NOT NULL, -- 1 = Telefone, 0 = Email
    descricaocontato VARCHAR(100) NOT NULL,
    FOREIGN KEY (idpessoa) REFERENCES pessoa(idpessoa) ON DELETE CASCADE
);

Após tudo isso feito, será necessário dar 'Start' nos servidores MySql e Apache no Xampp, e em seguida acessar no navegador a url "http://localhost/magazord/public/pessoa.html"

A partir desse ponto, o sistema já deve estar pronto para uso e testes.


---

  

   

