import React from 'react';
import ReactDOM from 'react-dom';
import Cat from './Cat';

it('renders without crashing', () => {
  const div = document.createElement('div');
  ReactDOM.render(<Cat />, div);
});
