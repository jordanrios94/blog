import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Example from './Example';

class Comments extends Component {
    render() {
        return(
            <div>
                <h1>Jordan</h1>
                <Example/>
            </div>
        );
    }
}

export default Comments;

if (document.getElementById('comments')) {
    ReactDOM.render(<Comments />, document.getElementById('comments'));
}