import React, { useEffect, useState } from "react"
import ReactDOM from "react-dom"
import { Container, Row, Col, Form, Button, Alert } from 'react-bootstrap'

const Registrar = () => {
  const [datos, setdatos] = useState({
    nombres: "",
    apellidos: "",
    usuario: "",
    contrasena: "",
  })
  const [datosvalidacion, setdatosvalidacion] = useState({
    nombres: true,
    apellidos: true,
    usuario: true,
    contrasena: true,
  })
  const [mensajes, setmensajes] = useState({
    variante: '',
    texto: ''
  })
  const CambiarInput = (e) => {
    setdatos({
      ...datos,
      [e.target.id]: e.target.value
    })
  }
  const EnviarDatos = (e) => {
    e.preventDefault()
    /* console.log('vacios', ValidarDatos())
    console.log('rex', ValidarDatos_exReg()) */
    ValidarDatos() ?
      ValidarDatos_exReg() ?
        fetch('/usuario/agregar', {
          method: 'POST',
          body: JSON.stringify(datos),
          headers: {
            'Content-Type': 'application/json'
          }
        }).then(res => res.json())
          .catch(error => console.error('Error:', error))
          .then(response => {
            if (response == 0) {
              LimpiarForm()
              setmensajes({
                variante: 'success',
                texto: 'Se creo usuario correctamente'
              })
            }
            if (response == 1) {
              setmensajes({
                variante: 'danger',
                texto: 'Ocurrió un error'
              })

            }
          })
        : setmensajes({
          variante: 'warning',
          texto: 'regx malo vacíos'
        })
      : setmensajes({
        variante: 'warning',
        texto: 'Campos vacíos'
      })
  }
  const LimpiarForm = () => {
    setdatos({
      nombres: "",
      apellidos: "",
      usuario: "",
      contrasena: "",
    })
    setmensajes({
      variante: '',
      text: ''
    })
  }
  const ValidarDatos = () => {
    return !(datos.nombres.trim() === '' ||
      datos.apellidos.trim() === '' ||
      datos.usuario.trim() === '' ||
      datos.contrasena.trim() === '')
  }
  const ValidarDatos_exReg = () => {
    let nombres = new RegExp("^[a-zA-Z]+$")
    let apellidos = new RegExp("^[a-zA-Z]+$")
    let usuario = new RegExp("^[a-zA-Z0-9]+$")
    let contrasena = new RegExp("^.{8,16}$")
    setdatosvalidacion({
      nombres: nombres.test(datos.nombres),
      apellidos: apellidos.test(datos.apellidos),
      usuario: usuario.test(datos.usuario),
      contrasena: contrasena.test(datos.contrasena)
    })

    return nombres.test(datos.nombres) &&
      apellidos.test(datos.apellidos) &&
      usuario.test(datos.usuario) &&
      contrasena.test(datos.contrasena)
  }
  return (
    <>
      <Container fluid>
        <Row className="justify-content-center">
          <Col xs={12} lg={8}>
            <Form onSubmit={EnviarDatos}>
              <Form.Group controlId="nombres">
                <Form.Label>Nombres</Form.Label>
                <Form.Control type="text" placeholder="Ingrese sus nombres" value={datos.nombres} onChange={CambiarInput} />
                {!datosvalidacion.nombres ? (<><small style={{ color: 'red' }}>Solo se aceptan letras</small></>) : (<></>)}
              </Form.Group>

              <Form.Group controlId="apellidos">
                <Form.Label>Apellidos</Form.Label>
                <Form.Control type="text" placeholder="Ingrese sus apellidos" value={datos.apellidos} onChange={CambiarInput} />
                {!datosvalidacion.apellidos ? (<><small style={{ color: 'red' }}>Solo se aceptan letras</small></>) : (<></>)}
              </Form.Group>

              <Form.Group controlId="usuario">
                <Form.Label>Usuario</Form.Label>
                <Form.Control type="text" placeholder="Ingrese su usuario" value={datos.usuario} onChange={CambiarInput} />
                {!datosvalidacion.usuario ? (<><small style={{ color: 'red' }}>Solo se aceptan alfanuméricos</small></>) : (<></>)}
              </Form.Group>

              <Form.Group controlId="contrasena">
                <Form.Label>Contraseña</Form.Label>
                <Form.Control type="password" placeholder="Ingrese su contraseña" value={datos.contrasena} onChange={CambiarInput} />
                {!datosvalidacion.contrasena ? (<><small style={{ color: 'red' }}>Cualquier carácter mínimo 8 caracteres máximo 16 caracteres  </small></>) : (<></>)}
              </Form.Group>

              <Form.Group className="my-2">
                <Button className="mx-1" type="submit" variant="primary" size="sm">Agregar</Button>
                <Button className="mx-1" type="button" variant="primary" size="sm" onClick={LimpiarForm}>Limpiar</Button>
              </Form.Group>
              <Form.Group className="my-2">
                <Alert variant={mensajes.variante} >
                  {mensajes.texto}
                </Alert>
              </Form.Group>
            </Form>
          </Col>
        </Row>
      </Container>
    </>
  )
}
export default Registrar

if (document.getElementById("registrar")) {
  const element = document.getElementById("registrar")
  const props = Object.assign({}, element.dataset)
  ReactDOM.render(<Registrar {...props} />, element)
}
