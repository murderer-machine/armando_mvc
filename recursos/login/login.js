import React from "react";
import ReactDOM from "react-dom";

const Login = () => {
  return <>soy un div login</>;
};
export default Login;
if (document.getElementById("login")) {
  const element = document.getElementById('login')
  const props = Object.assign({}, element.dataset)
  ReactDOM.render(<Login {...props} />, element)
}
