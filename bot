const TelegramBot = require('node-telegram-bot-api');
const ytdl = require('ytdl-core');
const fs = require('fs');
const path = require('path');

const token = '7607613263:AAHjgqJLjhyBQbYvki2aoKQHt3wgDAk2RQU';
const bot = new TelegramBot(token, { polling: true });

bot.onText(/\/download (.+)/, async (msg, match) => {
  const chatId = msg.chat.id;
  const videoUrl = match[1];

  if (!ytdl.validateURL(videoUrl)) {
    bot.sendMessage(chatId, 'קישור לא תקין. אנא ודא שהקישור הוא לסרטון יוטיוב.');
    return;
  }

  const info = await ytdl.getInfo(videoUrl);
  const title = info.videoDetails.title.replace(/[\/\\?%*:|"<>]/g, '-');
  const outputPath = path.resolve(__dirname, `${title}.mp4`);

  bot.sendMessage(chatId, 'מתחיל בהורדה, אנא המתן...');

  ytdl(videoUrl)
    .pipe(fs.createWriteStream(outputPath))
    .on('finish', () => {
      bot.sendMessage(chatId, 'ההורדה הושלמה! שולח את הסרטון...');
      bot.sendVideo(chatId, outputPath, {}, { filename: `${title}.mp4` })
        .then(() => {
          fs.unlinkSync(outputPath);
        })
        .catch((err) => {
          bot.sendMessage(chatId, 'אירעה שגיאה בשליחת הסרטון.');
          console.error(err);
        });
    })
    .on('error', (err) => {
      bot.sendMessage(chatId, 'אירעה שגיאה במהלך ההורדה.');
      console.error(err);
    });
});
