import React,{useState} from 'react'
import ReactDOM from 'react-dom'
import Form from 'react-bootstrap/Form'
import Button from 'react-bootstrap/Button'


const Ingresar = () => {
    const [datos,setDatos]=useState({
        email:"",
        password:"",
        recordar:false,
    })
    const manejadorInput = (event) => {
        const { type, checked, id, value } = event.target
        setDatos({
            ...datos,
            [id]: type === 'checkbox' ? checked : value
        })
    }

    return (
        <>
            <Form>
                <Form.Group controlId="email">
                    <Form.Label>Email</Form.Label>
                    <Form.Control autoComplete="new-password" onChange={manejadorInput} value={datos.email} type="email" placeholder="Ingrese email" />
                </Form.Group>

                <Form.Group controlId="password">
                    <Form.Label>Password</Form.Label>
                    <Form.Control autoComplete="new-password" onChange={manejadorInput} value={datos.password}  type="password" placeholder="Password" />
                </Form.Group>
                <Form.Group controlId="recordar">
                    <Form.Check onChange={manejadorInput} value={datos.recordar} type="checkbox" label="Mantener Sesión Abierta" />
                </Form.Group>
                <Button variant="primary" type="submit">
                    Ingresar
                </Button>
                {JSON.stringify(datos)}
            </Form>
        </>
    )
}

export default Ingresar

if (document.getElementById("ingresar")) {
    const element = document.getElementById("ingresar")
    const props = Object.assign({}, element.dataset)
    ReactDOM.render(<Ingresar {...props} />, element)
} 