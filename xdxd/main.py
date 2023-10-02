lista = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47]
print(lista)
def funkcjabinarna():
    l = 0
    p = 15
    sr = (l+p)/2
    szukana = input("liczbe ktora chcesz znalezc: ")
    while l <= p:
        if lista[sr] == szukana:
            print(sr)
        elif lista[sr] > szukana:
            p = sr-1
        else:
            l = sr+1
    sr = (l+p)/2
    print(-1)
print(funkcjabinarna())


