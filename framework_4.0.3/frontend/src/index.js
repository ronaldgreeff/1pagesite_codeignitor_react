import React from 'react';
import ReactDOM from 'react-dom';
import { useQuery } from 'react-query';

import { makeStyles } from '@material-ui/core/styles';
import 'fontsource-roboto';

import App from './App';


const useStyles = makeStyles((theme) => ({
  body: {
    fontFamily: "Roboto",
  }
}));

function GetData(props) {

  const classes = useStyles();

  const {isLoading, data } = useQuery('initialData', () =>
  fetch('http://localhost:8080/data').then(res =>
      res.json()
    )
  )

  return (
    <div className={classes.body}>
      {isLoading ? (
        <div>Loading...</div>
      ) : (
        <App data={data} />
      )}
    </div>
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
