import random #PEDRA E PAPEL E TESOURAS

print("Pedra paelsdlk e tesoura")
print("1 - Pedra")
print("2 - Papel")
print("3 - Tesoura")

while True:
    escolha = input("Digite a sua escolha: ")
    print(escolha)
    match escolha:
        case "1":
            escolha = "Pedra"
            break
        case "2":
            escolha = "Papel"
            break
        case "3":
            escolha = "Tesoura"
            break
        case _:
            print("Escolha inválida")

escolhas = ["Pedra","Papel","Tesoura"]

escolhas = random.choice(escolhas)

print(escolha, "vs", escolhas)

if escolha == escolhas:
    print("Empate")
else:
    if escolha == "Pedra":
        if escolhas == "Tesoura":
            print("Você ganhou")
        else:
            print("O computador ganhou")
    elif escolha == "Papel":
        if escolhas == "Tesoura":
            print("O computador ganhou")
        else:
            print("Voce ganhou")
    else:
        if escolhas == "Papel":
            print("Você ganhou")
        else:
            print("O computador ganhou")