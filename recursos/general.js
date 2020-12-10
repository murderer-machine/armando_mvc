import React from 'react'
import ReactDOM from 'react-dom'

const General = () =>{
    //logica

    //render
    return(
        <>
        soy hola mundo de react dasdasdsadasdsa
        </>
    )
}

export default General
if (document.getElementById("general")) {
    const element = document.getElementById('general')
    const props = Object.assign({}, element.dataset)
    ReactDOM.render(<General {...props} />, element)
}


