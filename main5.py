print("Once upon a time... di kelas 12 PPLG 1 tengah malam.")
print("Lampu tiba-tiba mati, dan hanya tersisa gitar di pojok kelas...")
print("1. Mainkan gitarnya")
print("2. Tinggalkan gitar dan keluar kelas")
choice = int(input("= "))

if choice == 1:
    print("Kamu memetik gitar itu jreng!")
    print("Nada terakhir berbunyi nyaring dan muncul sosok bayangan di belakangmu.")
    print("1. Lari keluar kelas")
    print("2. Menghadapinya dan berdoa")
    choice = int(input("= "))
    
    if choice == 1:
        print("Kamu lari sekuat tenaga ke koridor, tapi bayangan itu terus mengejar.")
        print("Kamu melihat pintu lab komputer terbuka.")
        print("1. Masuk ke lab komputer")
        print("2. Lanjut lari ke gerbang")
        choice = int(input("= "))
        
        if choice == 1:
            print("Kamu bersembunyi di bawah meja. Saat bayangan itu masuk, kamu ruqiyah ")
            print("Bayangan itu takut dan menghilang!")
            print("GOOD ENDING 1: Kamu selamat dan jadi bersih dari roh jahat.")
        elif choice == 2:
            print("Kamu lari tapi kaki kamu terkilir.")
            print("Penjaga sekolah datang dan menolongmu.")
            print("GOOD ENDING 2: Kamu selamat tapi teror gitra masih berlanjut")
    
    elif choice == 2:
        print("Kamu menutup mata dan berdoa. Suara gitar berubah menjadi lembut.")
        print("Sosok itu berubah menjadi anak kecil yang kehilangan arah.")
        print("arwah itu lenyap.")
        print("GOOD ENDING 3: Kamu menolong roh tersesat dan kelas menjadi damai.")

elif choice == 2:
    print("Kamu meninggalkan gitar itu dan berjalan ke arah pintu.")
    print("Tiba-tiba muncul sosok putih pendek di depanmu!")
    print("1. Tusuk dengan pensil")
    print("2. Tendang sekuat tenaga")
    choice = int(input("= "))
    
    if choice == 1:
        print("Tanganmu menembus tubuhnya kamu merasa dingin luar biasa.")
        print("Tiba-tiba kamu kehilangan kesadaran.")
        print("BAD ENDING: Kamu menjadi penghuni baru di kelas 12 PPLG 1...")
    elif choice == 2:
        print("Tendanganmu melewati tubuhnya. Sosok itu menghilang.")
        print("Kamu lari keluar sekolah.")
        print("GOOD ENDING 1: Kamu selamat dengan jantung berdebar hebat namun teror masih berlanjut.")
