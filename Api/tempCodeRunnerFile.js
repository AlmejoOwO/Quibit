const express = require("express");
const res = require("express/lib/response");
const app = express();
const morgan = require('morgan');
const PORT = 4000; 


//configuracion

app.set('port',process.env.port || 4000);
app.set('Json spases' , 2 )

//middlewares
app.use(morgan('dev'));
app.use(express.json());
app.use(express.urlencoded({extended:false}));


//routes 
app.use(require('../api/productos', require))

//empezar server 
app.listen(PORT, () => {
    console.log(`Servidor en puerto ${app.get(PORT)}`);
});

