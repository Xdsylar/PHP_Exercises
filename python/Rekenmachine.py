eersteCijfer = input("Geef een eerste cijfer: ")
tweedeCijfer = input("Geef een tweede cijfer: ")

eersteCijfer = float(eersteCijfer.replace(",","."))
tweedeCijfer = float(tweedeCijfer.replace(",","."))

operator = input("Wat wil je dat ik met je cijfers doe? \n")

def checkWhatKindOfOperationTheUserWants(userInput):
    if(userInput == "+" or userInput == "optellen"):
        return calculateResult(eersteCijfer, tweedeCijfer, "+")

    if(userInput == "-" or userInput == "aftrekken"):
        return calculateResult(eersteCijfer, tweedeCijfer, "-")

    if(userInput == "*" or userInput == "vermednigvuldigen"):
        return calculateResult(eersteCijfer, tweedeCijfer, "*")

    if(userInput == "/" or userInput == "delen"):
        return calculateResult(eersteCijfer, tweedeCijfer, "/")


def calculateResult(input1, input2, operation):
    if operation == "+":
        return formatResult(input1 + input2)
    elif operation == "-":
        return formatResult(input1 - input2)
    elif operation == "*":
        return formatResult(input1 * input2)
    else:
        return formatResult(input1 / input2)

def formatResult(number):
    result = number.is_integer()
    if result:
        return int(number)

    return number


print("The result is: ", checkWhatKindOfOperationTheUserWants(operator))