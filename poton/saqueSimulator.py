print("Saque Simulator") #Arcano

saque = int(input("Digite o quanto você quer sacar: "))

notas_50 = 0
notas_20 = 0
notas_10 = 0
notas_1 = 0

while saque > 50:
    notas_50 += 1
    saque -= 50

while saque > 20:
    notas_20 += 1
    saque -= 20

while saque > 10:
    notas_10 += 1
    saque -= 10

while saque >= 1:
    notas_1 += 1
    saque -= 1

if notas_50 != 0: print(f"Notas de 50 {notas_50}")

if notas_20 != 0: print(f"Notas de 20 {notas_20}")

if notas_10 != 0: print(f"Notas de 10 {notas_10}")

if notas_1 != 0: print(f"Notas de 1 {notas_1}")