#paisoktm

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