bola = 3

print('Bola sim') if bola == 2 else print('bola nao')

bola = 2
cola = 3
dola = 4

if bola > 1 and bola > 2:
    print("bola master")
elif cola > 1 and cola > 3:
    print("Cola?")
else:
    print("No one cares about dola")

if dola == bola:
    pass #mestre pass 789789456465

a = 4

match a:
    case 1:
        print("1")
    case 2:
        pass
    case 3:
        print("3")
    case 4:
        print('47')
    case other:
        print('aw shucks')

match bola:
    case 3:
        print('3')
    case 2:
        print('2')
    case 4:
        print('dola')
    case other:
        print('no bolas detected')