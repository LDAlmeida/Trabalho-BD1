import tabelas
from mdlBanco import Conexao

bd = Conexao('educatorrdb.ccqy8084hset.sa-east-1.rds.amazonaws.com','postgres','postgres','postgres')
    
def inserir(tupla, table):
    if table == 1:
        teste = bd.manipular("INSERT INTO professor VALUES ('"+str(tupla[0])+"', '"+str(tupla[1])+"', '"+str(tupla[2])+"');")
        print(teste)

def deletar(tupla, table):
    
    print(tupla)

def editar(tupla, table):
    
    print(tupla)


# INSERT INTO professor VALUES ('777', 'Samuel', 1);