# paeinto

dicionario = {
    "Bola": "Xina",
    "bola2": "China",
    "ano": 1952
}

print(dicionario)

dicionario['Bola23'] = "carlos"
print(dicionario)

dicionario.pop("ano")
print(dicionario)

for x, y in dicionario.items():
    print(x, y)