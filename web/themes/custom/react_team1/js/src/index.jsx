import React from 'react';
import ReactDOM from 'react-dom';

// # Example 1: Simple "Hello, World" code
ReactDOM.render(
    <div>
        <h1>World is beautiful</h1>
        <button style={{backgroundColor:'blue', color:'white'}} onClick={()=>{alert('Enitan!!!!!!')}}>Click me</button>
    </div>,
  document.getElementById('react-app')
);
