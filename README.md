# ETAPAS
O projeto ainda está em desenvolvimento:

- [x] Estrutura
- [x] Front-End
- [ ] Create
- [ ] Read
- [ ] Update
- [ ] Delete


> Projeto CRUD com PHP Puro e Composer. Sistema de Rotas e psr-4

# INICIANDO PROJETO</h1>
### (SEMPRE CLONE DA BRANCH DE HOMOLOGAÇÃO)
- Crie uma base de dados MySQL chamada "wizard_bd"
- Crie uma tabela 'clientes' com as colunas 'cliente_id', 'nome', 'email' e 'dt_nasc'
```
git clone -b homologacao <link_repositorio>
cd <projeto>
composer install
composer dump-autoload
php -S localhost:8081
```
- htttp://localhost:8081

<br><br>

# EXPLICAÇÕES
- Models: arquivos da estrutura das tabelas
- Server: arquivo de conexão ao banco
- app.js: inicialização das bibliotecas, rotas e operações
- views/layout: arquivos de layout que serão utilizados em todas as páginas
- views: paginas do projeto 

<br><br>

# GITHUB
> SUBINDO SUAS ALTERAÇÕES PARA O GITHUB
## PRIMEIRA VEZ (quando ainda não existir a sua branch):
```
git branch <seu_nome>
git checkout <seu_nome>
git add *
git commit -m "<seu_comentario>"
git push -u origin <seu_nome>
```
- pull request pelo site do Github da sua branch para a branch de homologação

<br>

## OUTRAS VEZES
```
git add *
git commit -m "<seu_comentario>"
git push
```
- pull request pelo site do Github da sua branch para a branch de homologação

<br><br>

# PUXANDO AS ALTERAÇÕES DA BRANCH DE HOMOLOGAÇÃO
Caso o projeto já exista na sua máquina e outra pessoa tiver feito alterações antes de você, execute:
```
git pull <link_repositorio> homologacao
```

<br><br>

# SUBINDO PARA UMA BRANCH EXISTENTE
Caso você esteja editando em um PC novo e queira atualizar sua branch que JA EXISTE:
```
//Comece trazendo os dados da branch
git clone -b <sua_branch> <link_repositorio>

//Após editar tudo
git add *
git commit -m "<comentario>"
git push origin <sua_branch>
```

<br><br><br>

# DOCUMENTAÇÃO
```
composer
```
