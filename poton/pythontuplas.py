Tuples = tuple(("Bola","Bola","2",2))
print(Tuples)
print(Tuples[1:])

Tuples = list(Tuples)
print(Tuples)
Tuples.append("China")
Tuples = tuple(Tuples)
print(Tuples)
enupio = ("Xina","Carlos")
Tuples += enupio
print(Tuples)

(bola,bola2,*dois) = Tuples
print(bola,dois)