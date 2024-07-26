# paiotajem

class Mago:

    def __init__(b123,xina):
        b123.xina = xina

    def __str__(self):
        return f"{self.xina}-men"
    
    def xina_men(bola123):
        print("Xina Men")
    
mago = Mago("Xina")

class Feiticeiro(Mago):
    
    def __init__(self,xina,bola):
        Mago.__init__(self,xina)
        self.bola = bola

    def __str__(self):
        return f"{self.bola}-san != {self.xina}-san"

    def bola_san(self):
        return 1+1
    
    def xina_men(bola123):
        return super().xina_men()
    
feiticeiro = Feiticeiro("xina","bola")
feiticeiro.xina_men()
print(feiticeiro)


class Car:
    def __init__(self,color,miliage):
        self.color = color
        self.miliage = miliage
    
    def __str__(self):
        return f"The {self.color} car has {self.miliage:,} miles"
    
blue = Car("Blue",20000)

print(blue)

class Vrum(Car):
    def __init__(self):
        pass