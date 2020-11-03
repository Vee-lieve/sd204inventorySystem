const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const mongoose = require('mongoose');
const path = require('path')
const app = express();

//const atlasUrl = 'mongodb://Vee:p@ssw0rd@cluster0-shard-00-00.kw84b.mongodb.net:27017,cluster0-shard-00-01.kw84b.mongodb.net:27017,cluster0-shard-00-02.kw84b.mongodb.net:27017/Vee?ssl=true&replicaSet=atlas-pojndz-shard-0&authSource=admin&retryWrites=true&w=majority'
const localUrl = 'mongodb://127.0.0.1/inventory'

const useAtlas = false
let url = useAtlas ? atlasUrl : localUrl
mongoose
    .connect(url, {
        useUnifiedTopology: true,
        useNewUrlParser: true,
        useCreateIndex: true,
        useFindAndModify: true
    })
    .then(() => console.log('DB Connected! ' + url))
    .catch(err => {
        console.log(err);
        console.log('CONNECTION ERROR!');
    });

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: false
}));

app.use(cors());

const userRoute = require("./routes/users.router")
app.use(userRoute)


// app.get("/", (req, res)=>{
//     res.json({
//         sms: "Hello from express."
//     })
// })
app.get('/register', function (req, res) {
    res.sendFile(path.join(__dirname+'/views/register.html'));
  });

app.get('/', function (req, res) {
    res.sendFile(path.join(__dirname+'/views/index.html'));
  });

var port = process.env.PORT || 8084
const server = app.listen(port, function() {
    console.log('app listening on post:', port);
});
// const io = require("socket.io")(server);
// app.set('socketio', io);