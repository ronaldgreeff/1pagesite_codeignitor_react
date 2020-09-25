import React from 'react';
import ReactDOM from 'react-dom';
import { useQuery } from 'react-query';
import { ReactQueryDevtools } from 'react-query-devtools';

import App from './App';

function GetData(props) {

  const {isLoading, data } = useQuery('initialData', () =>
  fetch('http://localhost:8080/data').then(res =>
      res.json()
    )
  )

  return (
    <div className="App">
      {isLoading ? (
        <div>Loading...</div>
      ) : (
        <App data={data} />
      )}
    </div>
  )
}

ReactDOM.render(
  <React.StrictMode>
    <GetData />
    <ReactQueryDevtools />
  </React.StrictMode>,
  document.getElementById('app')
);











// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
// import * as serviceWorker from './serviceWorker';
// serviceWorker.unregister();
