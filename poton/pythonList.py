lista = [1,2,3,3,4]
print(lista)
print(len(lista))

print(lista[2:3])
print(lista[2:])
print(lista[:-1])

if 2 in lista:
    print("bola")
lista[2] = "Boka"
print(lista)
lista.insert(-1,"xina")
print(lista)
lista.append("Jonathan2")

print(lista)

lista.pop(0)
print(lista)

lista2 = ["Azul", "Vermelho", "Bola!"]
lista2.append("Bola?")
print(lista2)
lista2.remove("Azul")
lista2.pop(0)
print(lista2)
lista2[1] = "Bola!"
lista2[0] = "Bola?"
print(lista2)
# funfa!
lista2.insert(1, "Bola")
print(lista2)

lista3 = lista + lista2
print(lista3)


lista = lista2.copy()
print (lista)