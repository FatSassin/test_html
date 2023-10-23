n = int(input("Podaj liczbe Naturalnom: "))
k = int(2)
while (n>1):
    while (n%k==0):
        print(k)
        n=n/k
    k=k+1
