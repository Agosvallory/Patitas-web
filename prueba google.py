lista = [2, 1, 3, 5, 3, 2]
pasadas = []
repetidos = []
#Ciclo for para iterar
for juguete in lista: 
    if juguete in pasadas:
      repetidos.append(juguete)
    print(juguete)
pasadas.append(juguete)
print(pasadas)
print("tengo repetidos: ", repetidos)
if len (repetidos) == 0:
    print("posición -1")
else:
    print("la primera ocurrencia es de ", repetidos [0])
    