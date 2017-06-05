import React from 'react';
import ReactDOM from 'react-dom';
import Psa from './Psa';

it('renders without crashing', () => {
  const div = document.createElement('div');
  ReactDOM.render(<Psa />, div);
});
