import requests


def SavingFile(inpt):
    file = open('result.txt', 'w',  encoding="utf-8")
    file.write(inpt)
    file.close()


url = input("Url : ")

data = requests.get(url)

if data.ok:
    result = data.text
    SavingFile(result)
    print("Berhasil Tersimpan")
