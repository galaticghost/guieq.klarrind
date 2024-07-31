# Pythn versão 4

x = lambda e : e + 50
print(x(5))
x = lambda e,w,d : e + w + d + 540
print(x(57,45,23))

def bola(bola):
    print("Bola")
    return lambda a : a + bola

xina = bola(5)

print(xina(4)) 
