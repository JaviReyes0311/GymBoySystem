import qrcode

# URL del bot en Telegram
api_url = "https://t.me/EvoHealty_bot"  # Asegúrate de que sea el nombre de usuario correcto de tu bot

# Generar QR
qr = qrcode.make(api_url)

# Guarda el QR en el directorio actual
output_file = "QR.png"
qr.save(r"C:\xampp\htdocs\EvoH2.0\controladores\bot_Telegram\QR.png")


print(f"QR generado y guardado como {output_file}")

