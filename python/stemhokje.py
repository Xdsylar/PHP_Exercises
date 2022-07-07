stem = ''
Z=(0)
D=(0)
resultaat =()
while stem != "uitslag":
    stem = input("Op wie wil je stemmen?""\n")
    if stem == "Zacharia":
        Z +=1
    elif stem == "Dominique":
        D +=1
    if stem == "uitslag":
        if Z > D:
            resultaat = "Zacharia heeft gewonnen"
            print(resultaat)
            break
        if  D == Z:
            resultaat = "Dominique en Zacharia hebben een gelijk aantal stemmen"
            print(resultaat)
            break
        resultaat = "Dominique heeft gewonnen"
        print(resultaat)
        break
