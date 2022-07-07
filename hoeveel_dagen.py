from datetime import datetime

jaar =int(input('wat is het jaar?'))
maand =int(input('wat is de maand?'))
dag =int(input('wat is de dag?'))

Nu = datetime.now()
datum= datetime(jaar,maand,dag)

tijd = Nu - datum
print(tijd)
