import random
chips = 10
inzetten=[""]
while True:
    print(f'je hebt {chips} chips')
    print('waar wil je op inzetten?')
    while True:
        inzet=input()
        if inzet.isnumeric():
            chips -=1
            inzetten.append(inzet)

        if inzet== 'stop' or chips == 0:
            getal =(random.randint(1,10))
            print("Rien Ne Va Plus!")
            for inzet in inzetten:
                if inzet == str(getal):
                    chips += 35
            print(f'de uitkomst is {getal}')
            break
    if chips ==0:
        break

print('Game Over')
