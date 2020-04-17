Para esse exemplo, deve se criar as tabelas usuário e documentos

usuario (id PK AI, email VARCHAR 100, senha VARCHAR 32, permissoes TEXT );

documentos (id PK AI, titulo VARCHAR 100);

Popular ambas as tabelas 
usuario
ex 1  teste@teste.com  senha= teste(MD5 precisa fazer update), permissoes (ADD, EDIT, DEL, SECRET)

documentos
ex 1 CPF de ciclano