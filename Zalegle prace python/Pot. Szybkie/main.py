def szybkiePotegowanie(a, n):
    w = 1.0
    while n > 0:
        if n % 2 == 1:
            w *= a
        a *= a
        n //= 2
    return w

a = float(input("Liczba (a): "))
n = int(input("Do potęgi (n): "))
wynik = szybkiePotegowanie(a, n)
print("Wynik potęgowania szybkiego:", wynik)