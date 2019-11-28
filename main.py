import update
import tabelas

tupla = []
table = int(input("Tabela que será alterada: "))
print("\n### MODO DE ALTERAÇÃO ###\n\n")
opcao = int(input("1 INSERIR\n2 DELETAR\n3 EDITAR\n3 SELECIONAR\n\n"))

if table == 1:
    if opcao == 1:
        tupla = tabelas.departamento()
        update.inserir(tupla, table)
    elif opcao == 2:
        tupla = tabelas.departamento()
        update.deletar(tupla, table)
    elif opcao == 3:
        tupla = tabelas.departamento()
        update.atualizar(tupla, table)
    elif opcao == 4:
        tupla = tabelas.departamento()
        update.selecionar(tupla, table)
    else:
        print("Opção inválida!")

elif table == 2:
    if opcao == 1:
        tupla = tabelas.professor()
        update.inserir(tupla, table)
    elif opcao == 2:
        tupla = tabelas.professor()
        update.deletar(tupla, table)
    elif opcao == 3:
        tupla = tabelas.professor()
        update.atualizar(tupla, table)
    elif opcao == 4:
        tupla = tabelas.professor()
        update.selecionar(tupla, table)
    else:
        print("Opção inválida!")

elif table == 3:
    if opcao == 1:
        tupla = tabelas.aluno()
        update.inserir(tupla, table)
    elif opcao == 2:
        tupla = tabelas.aluno()
        update.deletar(tupla, table)
    elif opcao == 3:
        tupla = tabelas.aluno()
        update.atualizar(tupla, table)
    elif opcao == 4:
        tupla = tabelas.aluno()
        update.selecionar(tupla, table)
    else:
        print("Opção inválida!")

elif table == 4:
    if opcao == 1:
        tupla = tabelas.disciplina()
        update.inserir(tupla, table)
    elif opcao == 2:
        tupla = tabelas.disciplina()
        update.deletar(tupla, table)
    elif opcao == 3:
        tupla = tabelas.disciplina()
        update.atualizar(tupla, table)
    elif opcao == 4:
        tupla = tabelas.disciplina()
        update.selecionar(tupla, table)
    else:
        print("Opção inválida!")

elif table == 5:
    if opcao == 1:
        tupla = tabelas.curso()
        update.inserir(tupla, table)
    elif opcao == 2:
        tupla = tabelas.curso()
        update.deletar(tupla, table)
    elif opcao == 3:
        tupla = tabelas.curso()
        update.atualizar(tupla, table)
    elif opcao == 4:
        tupla = tabelas.curso()
        update.selecionar(tupla, table)
    else:
        print("Opção inválida!")

else:
    print("OPÇÃO INVÁLIDA!")