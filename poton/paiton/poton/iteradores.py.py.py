# piton

bola = [1,2,3,4]

bola = iter(bola)

print(next(bola))

for num in bola:
    print(num) #3

class bola2:
    def __init__(self,max = 0):
        self.max = max
        self.n = 0

    def __iter__(self):
        return self
    
    def __next__(self):
        if self.n <= self.max:
            result = 2 ** self.n
            self.n += 1
            return result
        else:
            raise StopIteration
    

xinamen = bola2(2)

i = iter(xinamen)

print(next(i))
print(next(i))
print(next(i))