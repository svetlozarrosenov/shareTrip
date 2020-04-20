var chatApp = require('express')();
var http = require('http').createServer(chatApp);
var io = require('socket.io')(http);

chatApp.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

io.on('connection', (socket) => {
  console.log('a user connected');
});

http.listen(3000, () => {
  console.log('listening on *:3000');
});