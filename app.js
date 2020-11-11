const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const mongoose = require('mongoose');
const path = require('path')
const app = express();

const userRoute = require("./routes/users.router")
const inventoryRoute = require("./routes/inventory.router")
const orderRoute = require("./routes/order.router")
const productRoute = require("./routes/products.router")
const stockRoute = require("./routes/stocks.router")
const supplierRoute = require("./routes/suppliers.router")
//const atlasUrl = 'mongodb://Vee:p@ssw0rd@cluster0-shard-00-00.kw84b.mongodb.net:27017,cluster0-shard-00-01.kw84b.mongodb.net:27017,cluster0-shard-00-02.kw84b.mongodb.net:27017/Vee?ssl=true&replicaSet=atlas-pojndz-shard-0&authSource=admin&retryWrites=true&w=majority'
const localUrl = 'mongodb://127.0.0.1/inventory'

const useAtlas = false
let url = useAtlas ? atlasUrl : localUrl
app.use(userRoute)
app.use(inventoryRoute)
app.use(orderRoute)
app.use(productRoute)
app.use(stockRoute)
app.use(supplierRoute)
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
}))

app.use(cors());

app.use('/static',express.static(path.join(__dirname, "src")));


// app.get("/", (req, res)=>{
//     res.json({
//         sms: "Hello from express."
//     })
// })

app.get('/', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/register.html'));
  });

app.get('/home', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/index.html'));
  });

app.get('/inventory', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/inventory.html'));
  });

app.get('/stocks', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/stock.html'));
  });

app.get('/customers', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/customers.html'));
  });

app.get('/orders', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/order.html'));
  });

app.get('/suppliers', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/supplier.html'));
  });

app.get('/products', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/product.html'));
  });
  
app.get('/sales-report', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/report-sales.html'));
  });

app.get('/stock-report', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/report-stock.html'));
  });

app.get('/cashflow', function (req, res) {
    res.sendFile(path.join(__dirname+'/public/cashflow.html'));
  });

var port = process.env.PORT || 8084
const server = app.listen(port, function() {
    console.log('app listening on post:', port);
});
// const io = require("socket.io")(server);
// app.set('socketio', io);