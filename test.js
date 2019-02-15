var page = require('webpage').create();

// githubが開けたらキャプチャを取る
page.open('https://news.yahoo.co.jp/', function() {
  page.render('yahoo.png');
  phantom.exit();
});