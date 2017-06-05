import React from 'react';
import ReactDOM from 'react-dom';
import ReactGA from 'react-ga'

import App from './App';
import registerServiceWorker from './registerServiceWorker';

import './index.css';

ReactGA.initialize('UA-85981-9')

const trackPageView = () => {
  ReactGA.set({ page: window.location.pathname })
  ReactGA.pageview(window.location.pathname)
}

ReactDOM.render(<App />, document.getElementById('root'), trackPageView())

registerServiceWorker();
