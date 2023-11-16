import './node_modules/bootstrap/dist/css/bootstrap.min.css';
import React from 'react';
import ReactDOM from 'react-dom';
import Listagem from './components/Listagem';

const App = () => {
    return (
        <div className="container mt-5">
            <Listagem />
        </div>
    );
};

ReactDOM.render(<App />, document.getElementById('app'));