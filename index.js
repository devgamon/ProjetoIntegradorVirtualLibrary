const Express = require('express');
const app = Express();
const port = 8080;
const connection = require('./database/database.js');

const Autores = [
	{	
		id:0,
		nome: "Tarsila do Amaral",
		datNasc: "DD/MM/AAAA",
		datMort: "DD/MM/AAAA",
		bio: "Essa é uma biografia",
		obras: "Obras estarão linkadas no banco",
		foto: "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Tarsila_do_Amaral%2C_ca._1925.jpg/640px-Tarsila_do_Amaral%2C_ca._1925.jpg"
	},

	{	
		id:1,
		nome: "Pagu",
		datNasc: "DD/MM/AAAA",
		datMort: "DD/MM/AAAA",
		bio: "Essa é uma biografia",
		obras: "Obras estarão linkadas no banco",
		foto: "https://upload.wikimedia.org/wikipedia/commons/a/ae/Pagu.jpg"
	}


];

const Obras = [
	{idAut:0, name: 'O ovo', id: 0, foto:"https://d3swacfcujrr1g.cloudfront.net/img/uploads/2000/01/006909001019.jpg"},
	{idAut:0, name: 'Os Operários', id: 1, foto:"https://upload.wikimedia.org/wikipedia/pt/1/16/Operarios.jpg"},
	{idAut:1, name: 'O Mamoeiro', id: 2, foto:"https://d3swacfcujrr1g.cloudfront.net/img/uploads/2000/01/007019001019.jpg"}
];

app.set('view engine', 'ejs');
app.use(Express.static('public'));

connection
	.authenticate()

	.then(() => {
		console.log("Successful connection.");
	})

	.catch((e)=>{
		console.log(e);
	});

app.get('/', (req,res)=>{
	res.render('index.ejs');
});

app.get('/historia', (req, res)=>{
	res.send('Rota sobre a história do modernismo');
});

app.get('/obras', (req,res)=>{
	res.render('obras', {obras: Obras, autores: Autores});
});

app.get('/autores', (req,res)=>{
	res.render('autores', {autores: Autores});
});

app.get('/obras/:id', (req,res)=>{
	let id = req.params.id;
	if(!isNaN(id)){
		if(id==undefined){
			res.redirect('/autores');
		}else{
			res.render('obra', {obra: Obras[id], autor: Autores[Obras[id].idAut]});
		}
	}
});

app.get('/autores/:id', (req,res)=>{
	let id = req.params.id;
	if(!isNaN(id)){
		if(id==undefined){
			res.redirect('/autores');
		}else{
			res.render('autor', {autor: Autores[id]});
		}
	}
});

app.listen(port, ()=>console.log(`Server runing in ${port} port`));