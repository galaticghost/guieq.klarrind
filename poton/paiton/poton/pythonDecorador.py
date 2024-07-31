#paisoktm
class Contagem:
    def __init__(self,func):
        self.func = func
        self.vezes = 0
    def __call__(self,*args,**kwargs):
        self.vezes += 1
        self.func(*args,**kwargs)
        print(f"Essa função foi executada {self.vezes} vezes")


def start_end(func):
    def wrapper(*args):
        print("Start")
        func(*args)
        print("End")
    return wrapper

@start_end
def bola(x):
    print("Bola")
    print(f"{x + 5} = {x} + 5")

bola(6)

def repetidor(x):
    def decorador_repetidor(func):
        def wrapper(*args):
            for _ in range(x):
                result = func(*args)
            return result
        return wrapper
    return decorador_repetidor

@repetidor(5)
def bola(x):
    print("Bola")
    print(x)

bola(6)

@Contagem
def xina():
    print("Xina")

xina()