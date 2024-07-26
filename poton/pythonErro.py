x = 20

try:
    print(y)
except:
    print('sem y')

try:
    print(n)
except NameError:
    print("Variavel n não definida")
except:
    print("Pane no sistema")

try:
    print("Carlos")
except:
    print("carlos broxa")
else:
    print("Carlos existe?")

try:
    print("Carluxo",y)
except:
    print("Variavel não definida")
else:
    print("Funfou!")
finally:
    print("Fim")

if x > 10:
    raise Exception("Não pode maior que 10")

