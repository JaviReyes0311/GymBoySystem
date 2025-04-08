from telegram import Update
from telegram.ext import Application, CommandHandler, ContextTypes

# Tu token de Telegram
BOT_TOKEN = "7882262934:AAFXBohOCcOMjtLrY_FRojZX1CZXdRu677A"

# Comando de inicio
async def start(update: Update, context: ContextTypes.DEFAULT_TYPE) -> None:
    await update.message.reply_text("¡Hola! Este es un bot conectado a una página web.")

# Configuración del bot
def main():
    # Crear la aplicación
    app = Application.builder().token(BOT_TOKEN).build()

    # Define comandos
    app.add_handler(CommandHandler("start", start))

    # Inicia el bot
    print("Bot en ejecución...")
    app.run_polling()

if __name__ == "__main__":
    main()

