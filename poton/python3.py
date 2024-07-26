texto = "SantoBolaOuSantoBuela?"
print(texto[0:5]+texto[16:21])
# funciona!
print(texto[:21])
print(texto[16:])
print(texto.upper())
print(texto.lower())

texto = "   Santo Bola !!           "
print(texto.strip())
#strip = inicio e fim. fun = mestre bola
texto = texto.strip()
print(texto.split("B"))
texto = "Santo"
text = "Bola!"
texto = texto + " " + text
print(texto)

print(f"bola = {text}")