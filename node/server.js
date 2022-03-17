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
app.get("/post/:id",(req,res)=>{
   pool.execute('select * from post WHERE post.id = ?',[req.params.id])
   .then(([post])=>{res.send(JSON.stringify(post[0]))})
   .catch(error=>{console.log(error)})
})
app.post("/login",(req,res)=>{
   pool.execute('select id,username,email from user WHERE user.email = ? and user.password= ?',[req.body.email,req.body.password])
   .then(([user])=>{
      console.log(user)
      res.send(JSON.stringify(user[0]))
   })
   .catch(error=>{
      console.log(error)
      res.send(error)
   })
})
app.get("/user/post/:id",(req,res)=>{
   pool.execute('select * from post WHERE post.userid = ?',[req.params.id])
   .then(([rows,fieldData])=>{
      console.log(rows)
      res.send(JSON.stringify(rows))
   })
   .catch(error=>{
      console.log(error)
      res.send(error)
   })
})
app.post("/user/post/delete",(req,res)=>{
   const data=req.body
   pool.execute('delete from post where post.id=?',[data.id])
   .then(([])=>{res.send("deleted")})
   .catch(error=>{console.log(error)})
})
app.post("/user/post/add",(req,res)=>{
   const data=req.body
   pool.execute('insert into post(title,excerpt,description,userid) values(?,?,?,?)',[data.title,data.excerpt,data.description,data.userId])
   .then(([])=>{res.send("inserted")})
   .catch(error=>{console.log(error)})
})

app.listen(3000)