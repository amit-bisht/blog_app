const express=require('express')
const mysql=require("mysql2")
const bodyParser=require('body-parser')

const pool=mysql.createPool({
      host:'localhost',
      user:'root',
      database:'blog',
      password:"Akb@141417"
}).promise()

const app=express()

app.use(bodyParser.urlencoded({extended:false}))

app.get("/posts",(req,res)=>{
   pool.execute('select * from post')
   .then(([rows,fieldData])=>{res.send(JSON.stringify(rows))})
   .catch(error=>{console.log(error)})
})
app.post("/register",(req,res)=>{
   const data=req.body
   pool.execute('insert into user(username,email,password) Values(?,?,?)',[data.username,data.email,data.password])
   .then(([])=>{res.send("inserted")})
   .catch(error=>{console.log(error)})
})

app.listen(3000)