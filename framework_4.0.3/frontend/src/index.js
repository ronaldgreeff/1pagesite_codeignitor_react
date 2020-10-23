import React from 'react';
import ReactDOM from 'react-dom';
import { useQuery } from 'react-query';

import CssBaseline from '@material-ui/core/CssBaseline';
import { makeStyles } from '@material-ui/core/styles';
import 'fontsource-roboto';

import App from './App';


const useStyles = makeStyles((theme) => ({
}));

function GetData(props) {

  const classes = useStyles();

  const {isLoading, data } = useQuery('initialData', () =>
  fetch('http://localhost:8080/data').then(res =>
      res.json()
    )
  )

  return (
    <>
      <CssBaseline />
      {isLoading ? (
        <div>Loading...</div>
      ) : (
        <App data={data} />
      )}
    </>
  )
};

ReactDOM.render(
  <React.StrictMode>
    <GetData />
  </React.StrictMode>,
  document.getElementById('app')
);


// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
// import * as serviceWorker from './serviceWorker';
// serviceWorker.unregister();
