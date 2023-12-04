liczba = int(input("Podaj liczbe dziesietna: "))
tab = []
i = 0
while liczba != 0:
    tab.append(liczba % 2)
    liczba = liczba // 2
print("Liczba po zamianie na postac binarna: ", end="")
for j in range(len(tab) - 1, -1, -1):
    print(tab[j], end="")
print()
