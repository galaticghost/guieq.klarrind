class X:
    def __init__(self,integer):
        self.integer = integer

    def __repr__(self):
        return f"Número {self.integer}"

int1 = X('1')
print(int1)