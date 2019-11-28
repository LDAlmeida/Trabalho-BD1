import tabelas
from mdlBanco import Conexao

bd = Conexao('educatorrdb.ccqy8084hset.sa-east-1.rds.amazonaws.com','postgres','postgres','postgres')
    
def inserir(tupla, table):
    if table == 1:
<<<<<<< Updated upstream
        insert = bd.manipular
        ("INSERT INTO departamento VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
    elif table == 2:
        insert = bd.manipular
        ("INSERT INTO professor VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
    elif table == 3:
        insert = bd.manipular
        ("INSERT INTO aluno VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
    elif table == 4:
        insert = bd.manipular
        ("INSERT INTO disciplina VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
    elif table == 5:
        insert = bd.manipular
        ("INSERT INTO curso VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
=======
        teste = bd.manipular("INSERT INTO professor VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
        print(teste)
    elif table == 2:
        teste = bd.manipular("INSERT ")
>>>>>>> Stashed changes

def deletar(tupla, table):
    if table == 1:
        delete = bd.manipular("DELETE FROM departamento WHERE código = '" + str(tupla[0]) + "'")
    elif table == 2:
        delete = bd.manipular("DELETE FROM professor WHERE cpf = '" + str(tupla[0]) + "'")
    elif table == 3:
        delete = bd.manipular("DELETE FROM aluno WHERE código = '" + str(tupla[0]) + "'")
    elif table == 4:
        delete = bd.manipular("DELETE FROM disciplina WHERE cod_disciplina = '" + str(tupla[0]) + "'")
    elif table == 5:
        delete = bd.manipular("DELETE FROM curso WHERE matrícula = '" + str(tupla[0]) + "'")

def atualizar(tupla, table):
    if table == 1:
        update = bd.manipular("UPDATE departamento SET nome = '" +  str(tupla[1]) + 
        "', gcpf = '" + str(tupla[2]) + "' WHERE código = '" + str(tupla[0]) + "'")
    elif table == 2:
        update = bd.manipular("UPDATE professor SET nome = '" +  str(tupla[1]) + 
        "', nome = '" + str(tupla[2]) + "' WHERE cpf = '" + str(tupla[0]) + "'")
    if table == 3:
        update = bd.manipular("UPDATE aluno SET nome = '" +  str(tupla[1]) + 
        "', gcpf = '" + str(tupla[2]) + "' WHERE matrícula = '" + str(tupla[0]) + "'")
    if table == 1:
        update = bd.manipular("UPDATE disciplina SET nome = '" +  str(tupla[1]) + 
        "', gcpf = '" + str(tupla[2]) + "' WHERE cod_disciplina = '" + str(tupla[0]) + "'")
    if table == 1:
        update = bd.manipular("UPDATE curso SET nome = '" +  str(tupla[1]) + 
        "', gcpf = '" + str(tupla[2]) + "' WHERE código = '" + str(tupla[0]) + "'")


# INSERT INTO professor VALUES ('777', 'Samuel', 1);
# DELETE FROM professor WHERE cpf = 333;
# UPDATE professor SET nome = Bruno WHERE cpf = 333
# SELECT * FROM professor