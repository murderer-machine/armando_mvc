import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import logo from '../img/google.png'

const Principal = () => {
    return (
        <>
            hola indexes
            <img src={logo}></img>
            
        </>
    )
}

export default Principal

if (document.getElementById("principal")) {
    const element = document.getElementById("principal")
    const props = Object.assign({}, element.dataset)
    ReactDOM.render(<Principal {...props} />, element)
}