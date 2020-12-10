import React, { useEffect, useState } from "react"
import ReactDOM from "react-dom"

const Registrar = () => {
  const [datos,setDatos] = useState({
    nombres:'',
    apellidos:'',
    usuario :'',
    contrasena:'',
  })
  const [condicion,setCondicion] = useState(false)
const InputChange = (e) =>{
    setDatos({
      ...datos,   
      [e.target.id]: e.target.value,
    })
}
 const RegistrarUsuario = () =>{ 
  datos.nombres === '' ||
  datos.apellidos === '' || 
  datos.usuario === ''  ||
  datos.contrasena === '' ? setCondicion(true) :

    fetch('/registrar', {
      method: 'POST', 
      body: JSON.stringify(datos), 
      headers:{
          'Content-Type': 'application/json'
      }
  }).then(res => res.json())
    .catch(error => console.error('Error:', error))
    .then(response => {
      alert(JSON.stringify(response))
      setDatos({
        nombres:'',
        apellidos:'',
        usuario :'',
        contrasena:'',
      })
    })
 
  }

/* useEffect(()=>{
  RegistrarUsuario()
},[])  */
  
  return(
  <>
    <input id="nombres" value={datos.nombres} onChange={InputChange}/>
    <input id="apellidos" value={datos.apellidos} onChange={InputChange} />
    <input id="usuario" value={datos.usuario} onChange={InputChange} />
    <input id="contrasena" value={datos.contrasena} onChange={InputChange} />
    <button onClick={RegistrarUsuario}>Registrar</button>
    {condicion ? (
    <>
      <small style={{color:'red'}}>Faltan campos</small>
    </>
    ) : (
    <>
    </>
    )}
    
    {/* {JSON.stringify(datos)}  */}
  </>
  )
}
export default Registrar

if (document.getElementById("registrar")) {
  const element = document.getElementById('registrar')
  const props = Object.assign({}, element.dataset)
  ReactDOM.render(<Registrar {...props} />, element)
}
